<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Outil de rapport sur perte de l’odorat et l’altération du gout liées au COVID-19">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="./css/main.css" />
    <title>Questionnaire Perte Gout Covid-19</title>
</head>

<body>
    <main class="wrapper">
        <h1>Outil de rapport sur perte de l’odorat et l’altération du gout liées au COVID-19</h1>
        <p>Il existe des preuves anecdotiques qui s'accumulent rapidement que la perte de la perception des odeurs
            (anosmie) avec altération du gout (dysguesie) qui en résulte sont des symptômes fréquemment rapportés
            associés à la pandémie de COVID-19.
            Des rapports similaires font surface dans plusieurs pays a travers le monde, y compris en Afrique.
        </p>

        <p>Afin d'établir l'importance de ces symptômes dans le diagnostic et la progression de COVID-19, nous menons ce
            travail afin de permettre aux malades et aux prestataires de soins de santé de toutes les spécialités sur le
            continent de soumettre des données afin de communiquer en toute confidentialité sur la perte de l’odorat et
            le trouble du gout liées au COVID-19.</p>

        <p>Il existe des garanties pour assurer la confidentialité des rapports. Pour maintenir la confidentialité, ce
            rapport doit être rempli entre autres en ligne. Cependant, pour votre commodité, vous pouvez de même
            utiliser l'outil en dur pour établir un rapport sur l'anosmie ci-dessous:</p>

        <h3>Instructions:</h3>
        <ul>
            <li>Veuillez répondre à autant de questions que possible</li>
            <li>Ne communiquez aucune information susceptible d'identifier le médecin, le patient ou l'établissement
                dans les questions avec les zones de texte gratuites</li>
            <li>Aucune information identifiable n'est collectée auprès du fournisseur soumissionnaire</li>
            <li>Une fois vos données soumises, un e-mail nous sera envoyé pour informer de la nouvelle soumission.</li>
        </ul>

        <h2>OUTIL DE DÉCLARATION D'ANOSMIE COVID-19</h2>

        <form action="">
            <div class="question question-1">
                <label class="question-title" for="">1. Spécialité médicale du consultant:</label><br>
                <input type="text">
            </div>

            <div class="question question-2">
                <label class="question-title" for="">2. Âge du patient:</label>
                <br>
                <input type="number">
            </div>

            <div class="question question-3">
                <label class="question-title" for="">3. Sexe du patient:</label><br>
                <input id="homme" type="radio" name="sexe" value="homme" />Homme
                <input id="femme" type="radio" name="sexe" value="femme" />Femme
            </div>

            <div class="question question-4">
                <label class="question-title" for="">4. Localisation du patient au moment du diagnostic</label><br>
                <input type="radio" name="localisation" id="" value="au pays">Au Pays
                <input type="radio" name="localisation" id="" value="autre">Autre<br>
                <label for="">Si autre, Veuillez préciser le pays</label><br>
                <input type="text">
            </div>

            <div class="question question-5">
                <label class="question-title" for="">5. La source de l'infection au COVID-19 est-elle
                    identifiable?</label>
                <br>
                <input type="radio" name="source-identifiable" value="oui">Oui
                <input type="radio" name="source-identifiable" value="non">Non<br>
                <label for="">Si oui, combien de jours après le contact la perte de la perceotion des odeurs ou du gout
                    a t-elle été observée pour la première fois?</label><br>
                <input type="number" name="" id="">
            </div>

            <div class="question question-6">
                <label class="question-title" for="">6. Veuillez énumérer tous les facteurs de risque d'infection au
                    COVID-19
                    présents:</label><br>
                <input type="checkbox" name="" id="" value="aucun">Aucun<br>
                <input type="checkbox" name="" id="" value="Travailleur de santé">Travailleur de santé<br>
                <input type="checkbox" name="" id="" value="Premier répondant">Premier répondant<br>
                <input type="checkbox" name="" id="" value="Contact étroit avec un cas confirmé">Contact étroit avec un
                cas confirmé<br>
                <input type="checkbox" name="" id="" value="Sans abri">Sans abri<br>
                <input type="checkbox" name="" id="" value="Vie de promiscuité">Vie de promiscuité (dortoirs,
                fraternités / sororités, abris, prison, soins infirmiers qualifiés, assister quelqu’un, maison familiale
                pour adultes)<br>
                <input type="checkbox" name="" id=""
                    value="Voyager dans des zones connues où la transmission communautaire est généralisée">Voyager dans
                des zones connues où la transmission communautaire est généralisée<br>
                <input type="checkbox" name="" id="" value="Autre">Autre<br>
                <label for="">si Autre, veuillez préciser les facteurs de risque</label><br>
                <input type="text" name="" id="">
            </div>

            <div class="question question-7">
                <label class="question-title" for="">7. Autres facteurs de risque / comorbidités:</label><br>
                <input type="checkbox" name="" id="" value="Aucun">Aucun<br>
                <input type="checkbox" name="" id="" value="Fumeur">Fumeur<br>
                <input type="checkbox" name="" id="" value="Un traumatisme crânien">Un traumatisme crânien<br>
                <input type="checkbox" name="" id="" value="Sinusite / allergie">Sinusite / allergie<br>
                <input type="checkbox" name="" id="" value="Maladie respiratoire chronique / asthme">Maladie
                respiratoire chronique / asthme<br>
                <input type="checkbox" name="" id="" value="Maladie cardiaque">Maladie cardiaque<br>
                <input type="checkbox" name="" id="" value="Maladie neurologique">Maladie neurologique (AVC,…)<br>
                <input type="checkbox" name="" id="" value="Autre">Autre<br>
                <label for="">Si «Autre», veuillez préciser les facteurs de risque / comorbidités</label><br>
                <input type="text">
            </div>

            <div class="question question-8">
                <label class="question-title" for="">8. Quand l'anosmie la perte de l'odorat et/ou du goût ont-elles été
                    remarquées pour la
                    première fois par le patient?</label><br>
                <input type="radio" name="moment-remarque" id="" value="Avant le diagnostic">Avant le diagnostic
                <input type="radio" name="moment-remarque" id="" value="Après le diagnostic">Après le diagnostic
                <br>
                <label for="">Si avant le diagnostic, l'anosmie était-elle la raison du dépistage du
                    SRAS-CoV2?</label><br>
                <input type="radio" name="huit-a" id="" value="Oui">Oui
                <input type="radio" name="huit-a" id="" value="Non">Non
                <br>
                <label for="">Si après le diagnostic: combien de jours après le diagnostic?</label><br>
                <input type="number" name="huit-b" id="">

            </div>

            <div class="question question-9">
                <label class="question-title" for="">9. Le patient avait-il d'autres symptômes avant la perte de
                    l'odorat et du goūt? cochez toutes les cases</label><br>
                <input type="checkbox" name="" id="" value="Aucun">Aucun<br>
                <input type="checkbox" name="" id="" value="Fievre">Fievre<br>
                <input type="checkbox" name="" id="" value="Toux seche ou grasse">Toux seche ou grasse<br>
                <input type="checkbox" name="" id="" value="Nez bouches">Nez bouches<br>
                <input type="checkbox" name="" id="" value="Difficultes a respirer">Difficultes a respirer<br>
                <input type="checkbox" name="" id="" value="Maux de tetes">Maux de tetes<br>
                <input type="checkbox" name="" id="" value="Douleurs a la gorge">Douleurs a la gorge<br>
                <input type="checkbox" name="" id="" value="Douleurs des muscles et articulations">Douleurs des muscles
                et articulations<br>
                <input type="checkbox" name="" id="" value="Douleurs thoraciques">Douleurs thoraciques<br>
                <input type="checkbox" name="" id="" value="Perte d’appetit">Perte d’appetit<br>
                <input type="checkbox" name="" id="" value="Sensation de fatigue">Sensation de fatigue<br>
                <input type="checkbox" name="" id="" value="Diarrhee">Diarrhee<br>
                <input type="checkbox" name="" id="" value="Nausee">Nausee<br>
                <input type="checkbox" name="" id="" value="Vomissement">Vomissement<br>
                <input type="checkbox" name="" id="" value="Douleurs abdominales">Douleurs abdominales<br>
                <input type="checkbox" name="" id="" value="Vertiges">Vertiges<br>
                <input type="checkbox" name="" id="" value="Autre">Autre<br>
                <label for="">Si «Autre», veuillez fournir des détails:</label><br>
                <input type="text" name="" id="">
            </div>

            <div class="question question-10">
                <label class="question-title" for="">10. Quels autre signe le patient avait-il PENDANT toute la période
                    de la perte de l’odorat et
                    du gout?</label><br>
                <input type="checkbox" name="" id="" value="Aucun">Aucun<br>
                <input type="checkbox" name="" id="" value="Fievre">Fievre<br>
                <input type="checkbox" name="" id="" value="Toux seche ou grasse">Toux seche ou grasse<br>
                <input type="checkbox" name="" id="" value="Nez bouches">Nez bouches<br>
                <input type="checkbox" name="" id="" value="Difficultes a respirer">Difficultes a respirer<br>
                <input type="checkbox" name="" id="" value="Maux de tetes">Maux de tetes<br>
                <input type="checkbox" name="" id="" value="Douleurs a la gorge">Douleurs a la gorge<br>
                <input type="checkbox" name="" id="" value="Douleurs des muscles et articulations">Douleurs des muscles
                et
                articulations<br>
                <input type="checkbox" name="" id="" value="Douleurs thoraciques">Douleurs thoraciques<br>
                <input type="checkbox" name="" id="" value="Perte d’appetit">Perte d’appetit<br>
                <input type="checkbox" name="" id="" value="Sensation de fatigue">Sensation de fatigue<br>
                <input type="checkbox" name="" id="" value="Diarrhee">Diarrhee<br>
                <input type="checkbox" name="" id="" value="Nausee">Nausee<br>
                <input type="checkbox" name="" id="" value="Vomissement">Vomissement<br>
                <input type="checkbox" name="" id="" value="Douleurs abdominales">Douleurs abdominales<br>
                <input type="checkbox" name="" id="" value="Vertiges">Vertiges<br>
                <input type="checkbox" name="" id="" value="Autre">Autre<br>
                <label for="">Si «Autre», veuillez fournir des détails:</label><br>
                <input type="text" name="" id="">
            </div>

            <div class="question question-11">
                <label class="question-title" for="">11. Quel était l'état de l'infection au COVID-19 au moment où la
                    perte de l’odorat et du
                    gout a été observée?</label><br>
                <input type="radio" name="etat-infection" id="" value="Patient hospitalisé / hospitalisé">Patient
                hospitalisé / hospitalisé<br>
                <input type="radio" name="etat-infection" id="" value="Ambulatoire">Ambulatoire
            </div>

            <div class="question question-12">
                <label class="question-title" for="">12. L’état du patient s’est-il aggravé ou amélioré après la perte
                    de l’odorat et du
                    gout?</label><br>
                <input type="radio" name="etat-etat" id="" value="s'aggraver">s'aggraver<br>
                <input type="radio" name="etat-etat" id="" value="Améliorer">Améliorer
            </div>

            <div class="question question-13">
                <label class="question-title" for="">13. Quel est le statut actuel d’infection au COVID-19 du patient
                    ?</label><br>
                <input type="radio" name="etat-actuel" value="Actif">Actif<br>
                <input type="radio" name="etat-actuel" value="récupéré">récupéré<br>
                <input type="radio" name="etat-actuel" value="décédé">décédé
            </div>

            <div class="question question-14">
                <label class="question-title" for="">14. La perte de l’odorat et du gout? s'est-elle
                    résolue?</label><br>
                <input type="radio" name="etat-perte-odorat-gout" id="Oui" value="Oui">Oui<br>
                <input type="radio" name="etat-perte-odorat-gout" id="" value="Non">Non<br>
                <label>Si «oui» à ci-dessous:</label><br>
                <label for="">Combien de temps apres:</label><br>
                <input type="text" name="temps-apres" id=""><br>
                <label for="">Était-ce: </label><br>
                <input type="radio" name="resolution" id="" value="Résolution complète">Résolution complète<br>
                <input type="radio" name="resolution" id="" value="Résolution partielle">Résolution partielle
            </div>

            <div class="question question-15">
                <label class="question-title" for="">15. Le patient a-t-il reçu des traitements pour la perte de
                    l’odorat et du gout?</label>
                <br>
                <input type="radio" name="traitement" value="Oui">Oui<br>
                <input type="radio" name="traitement" id="" value="Non">Non<br>
                <label for="">Si «oui» à ci-dessus:</label><br>
                <label for="">Quels traitements, le cas échéant, le patient a-t-il reçus?</label><br>
                <input type="text" name="" id="">
                <br>
                <label for="">Combien de temps après la perte de l’odorat et du gout?s'est-elle résolue</label>
                <br><input type="text" name="temps-apres" id="">
            </div>

            <div class="question question-16">
                <label class="question-title" for="">16. Commentaires / Informations supplémentaires:</label><br>
                <textarea name="commentaire" id="" cols="40" rows="5"></textarea>
            </div>
            <input type="submit" name="submit" value="Remettre">
        </form>
        <div id="result-temp">

        </div>
    </main>
    <script src="./js/main2.js"></script>
</body>

</html>