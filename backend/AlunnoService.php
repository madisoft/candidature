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
    public function __construct(ClasseRepository $repository, AlunnoRepository $alunnoRepository)
    {
        $this->repository = $repository;
        $this->alunnoRepository = $alunnoRepository;
    }

    public function aggiungiAlunno($classeId, $alunnoId)
    {
        $classe = $this->repository->find($classeId);
        $alunnoDaAggiungere = $this->alunnoRepository->find($alunnoId);
        $alunni = $classe->getAlunni();

        if (count($alunni) < 10) {
            $tmp = false;
            foreach ($alunni as $key => $value)
            {
                if ($value->getCodiceFiscale() == $alunnoDaAggiungere->getCodiceFiscale())
                {
                    $tmp = true;
                }
            }
            if (!$tmp)
            {
                $classe->aggiungiAlunno($alunnoDaAggiungere);
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