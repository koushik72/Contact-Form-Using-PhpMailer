// this is the array for storing questions and subQuestions
// if you need to change any of these, just change here and it will change in
// the entire app
var questionsJSON = {
    "questions": [
        {
            "question": "Questions générales",
            "subQuestions": ["J'ai eu un accident"]
        },
        {
            "question": "J'ai oublié un objet",
            "subQuestions": ["Contacter mon chauffeur à propos d'un objet oublié", "Contacter Uber à propos d'un objet oublié"],
        },
        {
            "question": "J'ai été facturé du mauvais montant",
            "subQuestions": ["J'ai payé des frais d'annulation", "La course n'a pas été démarrée ou terminée à temps", "Mon chauffeur n'a pas pris le bon itinéraire",
                            "Mon chauffeur s'est arrêté pendant la course", "Je n'ai pas commandé cette course", "J'ai raté mon avion ou mon rendez-vous",
                            "Ma course a été ralentie par le trafic ou des travaux de voirie", "J'ai été facturé d'un euro supplémentaire lors d'un trajet uberPOOL "],
        },
        {
            "question": "Remarques sur un chauffeur",
            "subQuestions": ["J'ai rencontré un problème avec ma prise en charge", "Mon chauffeur n'a pas été professionnel", "Changer la note attribuée",
                            "Signaler une conduite dangereuse", "Mon chauffeur ne correspondait pas au profil dans l'application",
                            "Mon chauffeur s'est arrêté pendant la course", "Mon chauffeur a refusé de se rendre à la destination indiquée",
                            "Signaler un incident grave avec mon chauffeur", "J'ai eu un problème avec ma course planifiée"],
        },
        {
            "question": "Remarques sur un véhicule",
            "subQuestions": ["La plaque d'immatriculation du véhicule de mon chauffeur ne correspondait pas", "Le véhicule était en mauvais état", "Le véhicule de mon chauffeur ne correspondait pas"],
        },
        {
            "question": "Reçus et paiements",
            "subQuestions": ["Changer de moyen de paiement pour cette course", "Le reçu de ma course a été modifié", "Prélèvements multiples",
                            "Demander une facture pour une course", "Télécharger une facture"],
        },
        {
            "question": "Promotions",
            "subQuestions": ["Mon code promotionnel n'a pas fonctionné"],
        }
    ]
};

// jquery starts here
$(document).ready( function () {

    // load the questions from json
    var questions,
        q = questionsJSON.questions;
    for ( var i= 0; i<q.length; i++ ) {
        questions += '<option value="' + q[i].question + '">' + q[i].question + '</option>';
    }

    $('#question').html(questions);

    // on question select change subQuestions
    $('#question').change( function() {

        // value of question
        var question = $('#question').val();
        // check for the question and put sub-question
        // according to that
        var subQuestions;
        for(var i=0; i<q.length; i++) {
            // check the question
            if ( q[i].question == question ) {
                var subQ = q[i].subQuestions; // subQuestions array
                for (var j=0; j<subQ.length; j++) {
                    subQuestions += '<option value="' + subQ[j] + '">' + subQ[j] + '</option>';
                } // for j

            } // end of if
        } // for i

        $('#sub-question').html(subQuestions);

    });
});
