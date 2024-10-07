function submitQuiz() {
    // Respostas corretas
    const answers = {
        q1: 'a',
        q2: 'b',
        q3: 'b',
        q4: 'b',
        q5: 'b'
    };

    // Contagem de acertos
    let score = 0;

    // Obter respostas do usuário
    const form = document.getElementById('quizForm');
    const formData = new FormData(form);

    // Verificar cada resposta
    for (let [key, value] of formData.entries()) {
        if (value === answers[key]) {
            score++;
        }
    }

    // Mostrar resultado
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
