<?php
    set_time_limit(30);
    require 'HouseAnnounce.php';
    $counteeeer = 0;
    $totalNbOfAnnounces = 0;
    $totalStoria = 0;
    for($i=1; $i<20; $i++) {
        $page = file_get_contents('https://www.olx.ro/d/imobiliare/apartamente-garsoniere-de-vanzare/?page=' . $i);
        $doc = new DOMDocument();
        @ $doc->loadHTML($page);
        $xpath = new DOMXPath($doc);

        $nodeList = $xpath->query("//div[@data-cy='l-card']");
//        echo "am aj\n";

        foreach ($nodeList as $node) {
            $links = $node->getElementsByTagname('a');
            foreach ($links as $link) {
                if ($link->hasAttribute('href')) {
                    $myHref = $link->getAttribute('href');
        //                echo "am ajuns aici\n" . "</br>";
                    $totalNbOfAnnounces = $totalNbOfAnnounces + 1;
                    if (substr_compare($myHref, "https://www.storia.ro", 0, 20) == 0) {
                        $totalStoria = $totalStoria + 1;
                        $thisHouse = new HouseAnnounce();

                        $housePage = file_get_contents($myHref);
                        $docHouse = new DOMDocument();
                        @ $docHouse->loadHTML($housePage);
                        $xpathHouse = new DOMXPath($docHouse);

                        //sursa imaginii
                        $imgNodeList = $xpathHouse->query("//picture/source[1]");
                        foreach ($imgNodeList as $imgNode) {
                            // if ($imgNode->hasAttribute('src')) {
                            if ($imgNode->hasAttribute('srcset')) {
                                    $dataImg = $imgNode->getAttribute('srcset');
                                echo "aici: " . "$dataImg" . "</br>";
//                                $dataImg = substr($dataImg, 0, strpos($dataImg, "/image"));
                                $thisHouse->setDataImg($dataImg);
                            }
                        }

                        //titlul anuntului
                        $titleNodeList = $xpathHouse->query("//header/h1[1]");
                        foreach ($titleNodeList as $title) {
                            $thisHouse->setDataTitle($title->nodeValue);
                        }

                        //pretul
                        $priceNodeList = $xpathHouse->query("//strong[@data-cy='adPageHeaderPrice']");
                        foreach ($priceNodeList as $priceNode) {
                            $tempPrice = explode(" ", $priceNode->nodeValue);
                            $finalPrice = $tempPrice[0] .$tempPrice[1];
//                            echo "$finalPrice";
                            $thisHouse->setDataPrice($finalPrice);
                        }

                        //supr construita
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Suprafata construita']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $surface = explode(" ", $exempleNode->nodeValue);
                            $thisHouse->setDataSuprafataConstruita($surface[0]);
//                            echo "$surface[0]" . "</br>";
                        }

                        //supr utila
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Suprafata utila']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $surface = explode(" ", $exempleNode->nodeValue);
                            $thisHouse->setDataSuprafataUtila($surface[0]);
//                            echo "$surface[0]" . "</br>";
                        }

                        //numar camere
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Numarul de camere']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataNrCamere($exempleNode->nodeValue);
        //                        echo "$dataNrCamere"  . "</br>";
                        }

                        //etaj
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Etaj']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataEtaj($exempleNode->nodeValue);
        //                        echo "$dataEtaj"  . "</br>";
                        }

                        //stare
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Stare']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataStare($exempleNode->nodeValue);
        //                        echo "$dataEtaj"  . "</br>";
                        }

                        //tipProprietate
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Tip proprietate']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataTipProprietate($exempleNode->nodeValue);
        //                        echo "$dataEtaj"  . "</br>";
                        }

                        //compartimentare
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Compartimentare']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataCompartimentare($exempleNode->nodeValue);
        //                        echo "$dataEtaj"  . "</br>";
                        }

                        //orientare
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Orientare']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataOrientare($exempleNode->nodeValue);
        //                        echo "$dataEtaj"  . "</br>";
                        }

                        //descriere
        //                    echo "descriereeeeeeeeeeeeeeeeeeee"  . "</br>";
                        $datas = null;
                        $exempleNodeList = $xpathHouse->query("//section[@role='region']/*/div[@data-cy='adPageAdDescription']/p");
                        foreach ($exempleNodeList as $exempleNode) {
                            $datas = $datas . " " . $exempleNode->nodeValue;
                        }
                        if ($datas != null) {
                            $thisHouse->setDataDescriere($datas);
                        }

                        //anul constructiei
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Anul constructiei']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataAn($exempleNode->nodeValue);
                        }

                        //are lift?
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Lift']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $thisHouse->setDataLift($exempleNode->nodeValue);
                        }

                        //detalii
                        $detalii = null;
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Comoditati']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
        //                        echo "$exempleNode->nodeValue" . "</br>";
                            $detaliu = ltrim($exempleNode->nodeValue, '"');
                            $detaliu = rtrim($detaliu, '"');
                            $detalii = $detalii . " " . $detaliu;
                        }
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Siguranta']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $detaliu = ltrim($exempleNode->nodeValue, '"');
                            $detaliu = rtrim($detaliu, '"');
                            $detalii = $detalii . " " . $detaliu;
                        }
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Infrastructura']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $detaliu = ltrim($exempleNode->nodeValue, '"');
                            $detaliu = rtrim($detaliu, '"');
                            $detalii = $detalii . " " . $detaliu;
                        }
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Caracteristici']/*/div[@class='css-1wi2w6s estckra5']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $detaliu = ltrim($exempleNode->nodeValue, '"');
                            $detaliu = rtrim($detaliu, '"');
                            $detalii = $detalii . " " . $detaliu;
                        }
                        $thisHouse->setDataDetalii($detalii);

                        //oras si judet
                        $exempleNodeList = $xpathHouse->query("//header[@class='css-1s2plby eu6swcv26']/*/a[@class='e1nbpvi60 css-1095i4g e1enecw71']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $arrayLocation = explode(" ", $exempleNode->nodeValue);
                            $judet = $arrayLocation[0];
                            $thisHouse->setDataJudet($judet);
                            $length = count($arrayLocation);
                            $cartier = null;
                            for ($i = 2; $i < $length; $i++) {
                                $cartier = $cartier . " " . $arrayLocation[$i];
                            }
                            $thisHouse->setDataCartier($cartier);
                        }

                        //pret pe metru patrat
                        $exempleNodeList = $xpathHouse->query("//div[@aria-label='Prețul pe metru pătrat']");
                        foreach ($exempleNodeList as $exempleNode) {
                            $array = explode(" ", $exempleNode->nodeValue);
                            $thisHouse->setDataPretPeMetruPatrat($array[0]);
                        }


//                    echo "inainte de insert" . "</br>";
                        if ($thisHouse->getDataImg() != null &&
                            $thisHouse->getDataTitle() != null &&
                            $thisHouse->getDataPrice() != null &&
                            $thisHouse->getDataTipProprietate() != null &&
                            $thisHouse->getDataJudet() != null &&
                            $thisHouse->getDataDescriere() != null) {

                            if(!$thisHouse->existsInDatabase()) {
                                $thisHouse->insertIntoDatabase();

                                $counteeeer = $counteeeer + 1;
                            }
                        }
                    }
                }
            }
        }
        echo "Numar total de anunturi " . $totalNbOfAnnounces . "</br>";
        echo "Numar total de anunturi storia " . $totalStoria . "</br>";
        echo "Numar total de randuri inserate pana acum: " . "$counteeeer" . "</br>";
    }
    echo "Numar randuri inserate total: " . "$counteeeer";
?>