<?php


class Customer
{

    public function isProfilingActive(): bool
    {
        //indica se il cliente ha attivato o meno la profilazione
    }

    public function getReccomended(): Product
    {
        //TODO: trova il prodotto suggerito sulla base della strategia commerciale
    }

    public function getPurchasesSince(DateTimeImmutable $data): int
    {
        //Ottiene il numero di acquisti del cliente dalla data passata come parametro
    }
}

class LikeMyStuff
{
    public function suggest(Customer $customer): Product
    {
        //suggerisce il prodotto sulla base degli acquisti
    }
}

class Rel8
{
    public function advise(Customer $customer): Product
    {
        //suggerisce il prodotto per il cliente con profilazione
    }
}

class SpecialPromotion
{
    public function getPromotionName(): string
    {
        //ritorna il nome del prodotto in promozione o null se non c'è una promozione speciale
    }
}

class Product
{
    //..proprietà omesse
    public static function getRandom(): Product
    {
        //ritorna un prodotto casuale
    }

    public static function lookup(string $name): Product
    {
        //ritorna il prodotto con il nome passato come parametro
    }
}