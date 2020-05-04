var questions = document.querySelectorAll(".question");

function allQuestions() {

    
    let data = {};

    var q1 = getQuestion("1");
    var q2 = getQuestion("2");
    var q3 = getQuestion("3");
    var q4 = getQuestion("4");
    var q5 = getQuestion("5");
    var q6 = getQuestion("6");
    var q7 = getQuestion("7");
    var q8 = getQuestion("8");
    var q9 = getQuestion("9");
    var q10 = getQuestion("10");
    var q11 = getQuestion("11");
    var q12 = getQuestion("12");
    var q13 = getQuestion("13");
    var q14 = getQuestion("14");
    var q15 = getQuestion("15");
    var q16 = getQuestion("16");

    let question_names = [];

    for (let i = 1; i <= 16; i++){
        let question_div = getQuestion(i);
        let question_title = getQuestionTitle(question_div);
        question_title = question_title.slice(question_title.indexOf('.') + 1);
        question_names.push(question_title.trim());
    }

    function getQuestion(number) {
        return document.querySelector(".question.question-" + number);
    }

    // question titles
    let q1_title = getQuestionTitle(q1);
    let q2_title = getQuestionTitle(q2);
    let q3_title = getQuestionTitle(q3);
    let q4_title = getQuestionTitle(q4);
    let q5_title = getQuestionTitle(q5);
    let q6_title = getQuestionTitle(q6);
    let q7_title = getQuestionTitle(q7);
    let q8_title = getQuestionTitle(q8);
    let q9_title = getQuestionTitle(q9);
    let q10_title = getQuestionTitle(q10);
    let q11_title = getQuestionTitle(q11);
    let q12_title = getQuestionTitle(q12);
    let q13_title = getQuestionTitle(q13);
    let q14_title = getQuestionTitle(q14);
    let q15_title = getQuestionTitle(q15);
    let q16_title = getQuestionTitle(q16);

    function getQuestionTitle(q) {
        return document.querySelector("." + q.classList[1] + " .question-title")
            .textContent;
    }

    // Question one and two
    let q1_response = oneAndTwo(q1);
    let q2_response = oneAndTwo(q2);

    function oneAndTwo(q) {
        return q.children[2];
    }

    data.q1 = q1_response.value;
    data.q2 = q2_response.value;


    // Question three
    const sexes = document.querySelectorAll('input[name="sexe"]');
    let q3_response;
    for (const sexe of sexes) {
        if (sexe.checked) {
            q3_response = sexe.value;
            break;
        }
    }

    data.q3 = q3_response;

    // Question four
    const localisations = document.querySelectorAll('input[name="localisation"]');
    let q4_mid_response;
    let q4_response;
    let autre = document.querySelector('.question-4 input[type="text"]');
    for (const loc of localisations) {

        if (loc.checked) {
            q4_mid_response = loc.value;
            break;
        }

    }
    q4_mid_response == 'au pays' ? q4_response = q4_mid_response : q4_response = autre.value;
    data.q4 = q4_response;

    // Question five
    const source_identifiables = document.querySelectorAll('input[name="source-identifiable"]');
    let q5_mid_response;
    let q5_response;
    let oui = document.querySelector('.question-5 input[type="number"]');
    for (const source_identifiable of source_identifiables) {

        if (source_identifiable.checked) {
            q5_mid_response = source_identifiable.value;
            break;
        }

    }
    q5_mid_response != 'oui' ? q5_response = q5_mid_response : q5_response = oui.value;
    data.q5 = q5_response;

    // question six 
    let result_q6 = [];
    let q6_autre = document.querySelector('.question-6 input[type="text"]');
    let fac_presents = document.querySelectorAll('.question-6 input[type="checkbox"]');

    for (const fac_present of fac_presents) {
        if (fac_present.checked) {
            result_q6.push(fac_present.value);
        }
    }
    if (result_q6.includes('Autre')) {
        const index = result_q6.indexOf('Autre');
        result_q6[index] = q6_autre.value;
    }
    data.q6 = result_q6.toString();

    // Question seven
    let result_q7 = [];
    let q7_autre = document.querySelector('.question-7 input[type="text"]');
    let autre_facs = document.querySelectorAll('.question-7 input[type="checkbox"]');

    for (const autre_fac of autre_facs) {
        if (autre_fac.checked) {
            result_q7.push(autre_fac.value);
        }
    }
    if (result_q7.includes('Autre')) {
        const index = result_q7.indexOf('Autre');
        result_q7[index] = q7_autre.value;
    }
    data.q7 = result_q7.toString();

    // Question eight
    let q8_result = [];
    let q8_checkeds = document.querySelectorAll('.question-8 input[name="moment-remarque"');
    let q8_true_checked;
    let si_avant = document.querySelectorAll('.question-8 input[name="huit-a"]');
    let si_apres = document.querySelector('.question-8 input[name="huit-b"]');
    let q8_min_res;

    for (const q8_checked of q8_checkeds) {
        if (q8_checked.checked) {
            q8_true_checked = q8_checked.value;
            break;
        }
    }
    if (q8_true_checked == 'Avant le diagnostic') {
        for (const si_av of si_avant) {
            if (si_av.checked) {
                q8_min_res = si_av.value;
                break;
            }

        }
    } else if (q8_true_checked == 'Après le diagnostic') {
        q8_min_res = si_apres.value;
    }

    q8_result.push(q8_true_checked, q8_min_res);
    data.q8 = q8_result.toString();

    // Question nine
    let result_q9 = [];
    let q9_autre = document.querySelector('.question-9 input[type="text"]');
    let autre_sympts = document.querySelectorAll('.question-9 input[type="checkbox"]');

    for (const autre_sympt of autre_sympts) {
        if (autre_sympt.checked) {
            result_q9.push(autre_sympt.value);
        }
    }
    if (result_q9.includes('Autre')) {
        const index = result_q9.indexOf('Autre');
        result_q9[index] = q9_autre.value;
    }
    data.q9 = result_q9.toString();

    // Question ten
    let result_q10 = [];
    let q10_autre = document.querySelector('.question-10 input[type="text"]');
    let autre_signes = document.querySelectorAll('.question-10 input[type="checkbox"]');

    for (const autre_signe of autre_signes) {
        if (autre_signe.checked) {
            result_q10.push(autre_signe.value);
        }
    }
    if (result_q10.includes('Autre')) {
        const index = result_q10.indexOf('Autre');
        result_q10[index] = q10_autre.value;
    }
    data.q10 = result_q10.toString();

    // Question eleven
    const etat_infections = document.querySelectorAll('input[name="etat-infection"]');
    let q11_response;
    for (const etat_infection of etat_infections) {
        if (etat_infection.checked) {
            q11_response = etat_infection.value;
            break;
        }
    }
    data.q11 = q11_response;

    // Question twelve
    const etat_etats = document.querySelectorAll('input[name="etat-etat"]');
    let q12_response;
    for (const etat_etat of etat_etats) {
        if (etat_etat.checked) {
            q12_response = etat_etat.value;
            break;
        }
    }
    data.q12 = q12_response;

    // Question thirteen
    const etat_actuels = document.querySelectorAll('input[name="etat-actuel"]');
    let q13_response;
    for (const etat_actuel of etat_actuels) {
        if (etat_actuel.checked) {
            q13_response = etat_actuel.value;
            break;
        }
    }
    data.q13 = q13_response;

    // Question fourteen
    let q14_oui_res = [];
    let etat_perte_od_gouts = document.querySelectorAll('.question-14 input[name="etat-perte-odorat-gout"]');
    let etat_perte_od_gout_checked;
    let q14_temps_apres = document.querySelector('.question-14 input[name="temps-apres"]');
    let resolus = document.querySelectorAll('.question-14 input[name="resolution"]');

    for (const etat_perte_od_gout of etat_perte_od_gouts) {
        if (etat_perte_od_gout.checked) {
            etat_perte_od_gout_checked = etat_perte_od_gout.value;
            break;
        }
    }
    if (etat_perte_od_gout_checked == 'Oui') {
        let true_resolu;
        for (const resolu of resolus) {
            if (resolu.checked) {
                true_resolu = resolu.value;
            }
        }
        q14_oui_res.push(q14_temps_apres.value, true_resolu);
        data.q14 = q14_oui_res.toString();
    } else {
        data.q14 = etat_perte_od_gout_checked;
    }

    // Question fifteen
    let q15_oui_res = [];
    let traitements = document.querySelectorAll('.question-15 input[name="traitement"]');
    let traitement_checked;
    let q15_type_traitement = document.querySelector('.question-15 input[type="text"]');
    let q15_temps_apres = document.querySelector('.question-15 input[name="temps-apres"]');

    for (const traitement of traitements) {
        if (traitement.checked) {
            traitement_checked = traitement.value;
            break;
        }
    }
    if (traitement_checked == 'Oui') {
        q15_oui_res.push(q15_type_traitement.value, q15_temps_apres.value);
        data.q15 = q15_oui_res.toString();
    } else {
        data.q15 = traitement_checked;
    }

    // Question sixteen | comments
    let comments = document.querySelector('textarea[name="commentaire"]');
    data.comments = comments.value;

    return (data);
}

const form = document.querySelector("form");
form.addEventListener("submit", async function(event) {

    event.preventDefault();
    //document.querySelector('#result-temp').innerHTML = JSON.stringify(allQuestions());
    let data = allQuestions();
    const formData = new FormData();
    formData.append('data', JSON.stringify(data));
    await fetch('./server.php', {
        method: 'POST',
        mode: 'cors',
        cache: 'default',
        credentials: 'same-origin',
        headers: {
        },
        body: formData
    }).then(response => {
        return response.text();
    }).then(response_data => {
        console.log(response_data);
    });

});