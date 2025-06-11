use Models\Professor;
use Models\Disciplina;
use Models\Turma;
use Models\Cronograma;

$prof = new Professor(1, "Minerva McGonagall", "minerva@hogwarts.edu");

$disciplina = new Disciplina(1, "Transfiguração", "Transformações mágicas");
$turma = new Turma(1, "Grifinória 1º ano", "2025");

$cronograma = new Cronograma("Segunda-feira", "09:00", $turma, $disciplina);

$prof->adicionarDisciplina($disciplina);
$prof->adicionarTurma($turma);
$prof->adicionarCronograma($cronograma);

print_r($prof->getCronograma());
