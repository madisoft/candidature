<?php
/**
 * Riscrivere le classi migliorandole sotto ogni aspetto (sintassi, struttura...)
 * Le classi devono poter funzionare con php >= 7.3
 */

class Alunno
{
    private $codiceFiscale;

    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

}

class Classe
{
    private $alunni;

    public function aggiungiAlunno($alunno)
    {
        $this->alunni[] = $alunno;
    }

    public function getAlunni()
    {
        return $this->alunni;
    }
}

class AlunnoService
{

    public function aggiungiAlunno(Alunno $alunno, Classe $classe)
    {

        $alunni = $classe->getAlunni();

        if (count($alunni) < 10) {
            foreach ($alunni as $key => $value)
            {
                if ($value->getCodiceFiscale() != $alunno->getCodiceFiscale())
                {
                    continue;
                }
                $trovato = true;
            }
            if (!$trovato)
            {
                $classe->aggiungiAlunno($alunno);
            } else {
                throw new AlunnoGiaPresenteException();
            }
        } else {
            throw new TroppiAlunniException();
        }
    }

}

class AlunnoGiaPresenteException extends Exception
{

}

class TroppiAlunniException extends Exception
{

}