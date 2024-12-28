const correctAnswers = {
    q1: 'Mad Cows Disease',
    q2: 'Pistachios',
    q3: 'Tobacco',
    q4: 'Aeroponics',
    q5: 'Tractors',
    q6: 'Spinach',
    q7: 'Broadcast',
    q8: 'Harrow',
    q9: 'Cranberries',
    q10: 'Bee',
    q11: 'British Columbia',
    q12: 'Buck',
    q13: 'Coffee',
    q14: 'Homestead Act',
    q15: 'Choice',
    q16: 'Soybean',
    q17: 'Henna',
    q18: 'Mango',
    q19: 'Grafting',
    q20: 'Fertile Crescent',
};

function submitQuiz() {
    const form = document.getElementById('quizForm');
    const formData = new FormData(form);
    const resultDiv = document.getElementById('result');

    let resultHtml = '<h2>Quiz Results</h2><ul>';

    formData.forEach((value, key) => {
        const isCorrect = value === correctAnswers[key];
        resultHtml += `
            <li>
                <strong>Question ${key.slice(1)}:</strong>
                ${isCorrect ? `<span class="correct">Correct! (${value})</span>` : `<span class="incorrect">Incorrect. Correct answer: ${correctAnswers[key]}</span>`}
            </li>
        `;
    });

    resultHtml += '</ul>';
    resultDiv.innerHTML = resultHtml;
}
