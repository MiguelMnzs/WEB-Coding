function submitQuiz() {
    
    const answers = {
        q1: 'a',
        q2: 'b',
        q3: 'b',
        q4: 'b',
        q5: 'b'
    };

    let score = 0;

    const form = document.getElementById('quizForm');
    const formData = new FormData(form);

    for (let [key, value] of formData.entries()) {
        if (value === answers[key]) {
            score++;
        }
    }

    const result = document.getElementById('result');
    result.textContent = `Você acertou ${score} de 5 perguntas.`;

    if (score === 5) {
        result.style.color = 'green';
    } else if (score >= 3) {
        result.style.color = 'orange';
    } else {
        result.style.color = 'red';
    }
}
