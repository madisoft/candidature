import json
import logging
import boto3
import yaml

log = logging.getLogger()
log.setLevel("INFO")

def read_file(bucket_name:str,file_name:str) -> dict:
    s3_client=boto3.client('s3')
    payload = s3_client.get_object(Bucket=bucket_name, Key=file_name)
    return json.loads(payload['Body'].read())


def save_file(bucket_name:str,file_name:str,payload_filtered:str):
    s3_client=boto3.client('s3')
    s3_client.put_object(Body=payload_filtered, Bucket=bucket_name, Key=file_name)

  
def lambda_handler(event, context):
  payload = read_file(event['bucket_name'],event['file_name'])
  payload_filtered = {
    'NetworkInterfaces': [
    {'MacAddress':x['MacAddress'],
        'PrivateIpAddress':x['PrivateIpAddress'],
        'PublicIp':x['Association']['PublicIp'],
        'PrivateDnsName':x['PrivateDnsName'],
        'PublicDnsName':x['Association']['PublicDnsName']
      } for x in payload['NetworkInterfaces'] if ((x['Attachment']['Status'] == 'attached') and (x['Status']=='in-use'))]
  }
  log.info(payload_filtered)
  save_file(event['bucket_name'],event['dest_name'],yaml.dump(payload_filtered))
  
  return json.dumps({
    'status': 200,
    })

