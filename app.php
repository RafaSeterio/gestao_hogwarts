use Models\Professor;
use Models\Disciplina;
use Models\Turma;
use Models\Cronograma;


require 'vendor/autoload.php';


use App\Model\Aluno\Aluno;

$test = new Aluno();
echo $test->sayHello();
=======
use App\Model\Alunos\Aluno;
use App\Model\Chapeu\ChapeuSeletor;
use App\Model\Relatorios\DistribuicaoDeCasas;

$alunos = [
    new Aluno('Harry Potter', 'Corajoso, impulsivo'),
    new Aluno('Draco Malfoy', 'Ambicioso, esperto'),
    new Aluno('Luna Lovegood', 'Criativa, inteligente'),
    new Aluno('Cedrico Diggory', 'Leal, justo'),
];

$chapeu = new ChapeuSeletor();

foreach ($alunos as $aluno) {
    $chapeu->selecionarCasa($aluno);
    echo "{$aluno->getNome()} foi selecionado para a casa {$aluno->getCasa()}\n";
}

echo "\nDistribuição por casa:\n";
$distribuicao = DistribuicaoDeCasas::gerar($alunos);
print_r($distribuicao);
=======
$prof = new Professor(1, "Minerva McGonagall", "minerva@hogwarts.edu");

$disciplina = new Disciplina(1, "Transfiguração", "Transformações mágicas");
$turma = new Turma(1, "Grifinória 1º ano", "2025");

$cronograma = new Cronograma("Segunda-feira", "09:00", $turma, $disciplina);

$prof->adicionarDisciplina($disciplina);
$prof->adicionarTurma($turma);
$prof->adicionarCronograma($cronograma);

print_r($prof->getCronograma());


