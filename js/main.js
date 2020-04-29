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

    return (data);
}

const form = document.querySelector("form");
form.addEventListener("submit", function (event) {

    event.preventDefault();
    console.log(allQuestions());

});