<?php

class HouseAnnounce {
    public $dataImg = null;
    public $dataPrice = null;
    public $dataTitle = null;
    public $dataSuprafataConstruita = null;
    public $dataSuprafataUtila = null;
    public $dataNrCamere = null;
    public $dataEtaj = null;
    public $dataStare = null;
    public $dataTipProprietate = null;
    public $dataCompartimentare = null;
    public $dataOrientare = null;
    public $dataAn = null;
    public $dataLift = null;
    public $dataDetalii = null;
    public $dataDescriere = null;
    public $dataJudet = null;
    public $dataCartier = null;
    private $dataPretPeMetruPatrat = null;

    private const username="root";
    private const password="";
    private const host="localhost";
    private const db_name = "twproject";

    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=" . self::host . ";dbname=" . self::db_name, self::username, self::password);
    }

    public function setDataImg($dataImg)
    {
        $this->dataImg = $dataImg;
    }

    public function setDataPrice($dataPrice): void
    {
        $this->dataPrice = $dataPrice;
    }

    public function setDataTitle($dataTitle): void
    {
        $this->dataTitle = $dataTitle;
    }

    public function setDataSuprafataConstruita($dataSuprafataConstruita): void
    {
        $this->dataSuprafataConstruita = $dataSuprafataConstruita;
    }

    public function setDataSuprafataUtila($dataSuprafataUtila): void
    {
        $this->dataSuprafataUtila = $dataSuprafataUtila;
    }

    public function setDataNrCamere($dataNrCamere): void
    {
        $this->dataNrCamere = $dataNrCamere;
    }

    public function setDataEtaj($dataEtaj): void
    {
        $this->dataEtaj = $dataEtaj;
    }

    public function setDataStare($dataStare): void
    {
        $this->dataStare = $dataStare;
    }

    public function setDataTipProprietate($dataTipProprietate): void
    {
        $this->dataTipProprietate = $dataTipProprietate;
    }

    public function setDataCompartimentare($dataCompartimentare): void
    {
        $this->dataCompartimentare = $dataCompartimentare;
    }

    public function setDataOrientare($dataOrientare): void
    {
        $this->dataOrientare = $dataOrientare;
    }

    public function setDataAn($dataAn): void
    {
        $this->dataAn = $dataAn;
    }

    public function setDataLift($dataLift): void
    {
        $this->dataLift = $dataLift;
    }

    public function setDataDetalii($dataDetalii): void
    {
        $this->dataDetalii = $dataDetalii;
    }

    public function setDataDescriere($dataDescriere): void
    {
        $this->dataDescriere = $dataDescriere;
    }

    public function setDataJudet($dataJudet): void
    {
        $this->dataJudet = $dataJudet;
    }

    public function setDataCartier($dataCartier): void{
        $this->dataCartier = $dataCartier;
    }

    public function setDataPretPeMetruPatrat($dataPretPeMetruPatrat): void
    {
        $this->dataPretPeMetruPatrat = $dataPretPeMetruPatrat;
    }

    public function getDataImg()
    {
        return $this->dataImg;
    }

    public function getDataPrice()
    {
        return $this->dataPrice;
    }

    public function getDataTitle()
    {
        return $this->dataTitle;
    }

    public function getDataSuprafataConstruita()
    {
        return $this->dataSuprafataConstruita;
    }

    public function getDataSuprafataUtila()
    {
        return $this->dataSuprafataUtila;
    }

    public function getDataNrCamere()
    {
        return $this->dataNrCamere;
    }

    public function getDataEtaj()
    {
        return $this->dataEtaj;
    }

    public function getDataStare()
    {
        return $this->dataStare;
    }

    public function getDataTipProprietate()
    {
        return $this->dataTipProprietate;
    }

    public function getDataCompartimentare()
    {
        return $this->dataCompartimentare;
    }

    public function getDataOrientare()
    {
        return $this->dataOrientare;
    }

    public function getDataAn()
    {
        return $this->dataAn;
    }

    public function getDataLift()
    {
        return $this->dataLift;
    }

    public function getDataDetalii()
    {
        return $this->dataDetalii;
    }

    public function getDataDescriere()
    {
        return $this->dataDescriere;
    }

    public function getDataJudet()
    {
        return $this->dataJudet;
    }

    public function getDataCartier()
    {
        return $this->dataCartier;
    }

    public function getDataPretPeMetruPatrat()
    {
        return $this->dataPretPeMetruPatrat;
    }

    public function existsInDatabase(){
        return false;
    }

    public function insertIntoDatabase() {
        $query = "INSERT INTO announces (title, county, price, description, img_source, property_type,
                                    usable_area, floor, state, built_area, partitioning, orientation, 
                                    construction_year, elevator, characteristics, street_neighborhood, 
                                    rooms) VALUES (:title, :county, :price, :description, :img_source, 
                                    :property_type, :usable_area, :floor, :statee, :built_area, :partitioning, 
                                    :orientation, :construction_year, :elevator, :characteristicss, 
                                    :street_neighborhood, :rooms)";

        $statement = $this->db->prepare($query);
        $statement->bindParam('title', $this->dataTitle, PDO::PARAM_STR);
        $statement->bindParam('county', $this->dataJudet, PDO::PARAM_STR);
        $statement->bindParam('price', $this->dataPrice, PDO::PARAM_INT);
        $statement->bindParam('description', $this->dataDescriere, PDO::PARAM_STR);
        $statement->bindParam('img_source', $this->dataImg, PDO::PARAM_STR);
        $statement->bindParam('property_type', $this->dataTipProprietate, PDO::PARAM_STR);
        $statement->bindParam('usable_area', $this->dataSuprafataUtila, PDO::PARAM_INT);
        $statement->bindParam('floor', $this->dataEtaj, PDO::PARAM_STR);
        $statement->bindParam('statee', $this->dataStare, PDO::PARAM_STR);
        $statement->bindParam('built_area', $this->dataSuprafataConstruita, PDO::PARAM_INT);
        $statement->bindParam('partitioning', $this->dataCompartimentare, PDO::PARAM_STR);
        $statement->bindParam('orientation', $this->dataOrientare, PDO::PARAM_STR);
        $statement->bindParam('construction_year', $this->dataAn, PDO::PARAM_INT);
        $statement->bindParam('elevator', $this->dataLift, PDO::PARAM_STR);
        $statement->bindParam('characteristicss', $this->dataDetalii, PDO::PARAM_STR);
        $statement->bindParam('street_neighborhood', $this->dataCartier, PDO::PARAM_STR);
        $statement->bindParam('rooms', $this->dataNrCamere, PDO::PARAM_STR);

        if(!$statement->execute()) {
            echo "aa crapaaaat";
            throw new Exception("Error crawling!");
        }

//        if(!$statement->execute(['title'=>$this->dataTitle,'county'=>$this->dataJudet,
//            'price'=>$this->dataPrice,'description'=>$this->dataDescriere,
//            'img_source'=>$this->dataImg,'property_type'=>$this->dataTipProprietate,
//            'usable_area'=>$this->dataSuprafataUtila,'floor'=>$this->dataEtaj,
//            'statee'=>$this->dataStare,'built_area'=>$this->dataSuprafataConstruita,
//            'partitioning'=>$this->dataCompartimentare,'orientation'=>$this->dataOrientare,
//            'construction_year'=>$this->dataAn,'elevator'=>$this->dataLift,
//            'characteristicss'=>$this->dataDetalii,'street_neighborhood'=>$this->dataCartier,
//            'rooms'=>$this->dataNrCamere]
//        )){
//            echo "aa crapaaaat";
//            throw new Exception("Error crawling!");
//        }
    }
}