<?php



require_once __DIR__ . '/../vendor/autoload.php';

use App\Model\Aluno\Aluno;
use App\Model\Aluno\CadastroService;
use App\Model\Aluno\Convite;

use App\Model\Academico\Advertencia;
use App\Model\Academico\Disciplina;
use App\Model\Academico\RegistroAcademico;

echo "\n### Módulo 1: Cadastro de Aluno ###\n";

// Criando convite
$convite = new Convite('harry@hogwarts.com');
echo "Convite criado para: " . $convite->getEmail() . "\n";

// Cadastrando aluno
$aluno = new Aluno('Harry Potter', 'harry@hogwarts.com', '31/07/1980');
$cadastro = new CadastroService();
$cadastro->cadastrar($aluno);
echo "Aluno cadastrado: " . $aluno->getNome() . "\n";


echo "\n### Módulo 4: Acadêmico e Disciplinar ###\n";


$disciplina = new Disciplina('Defesa Contra as Artes das Trevas', 'Prof. Lupin');
echo "Disciplina criada: " . $disciplina->getNome() . "\n";


$registro = new RegistroAcademico($aluno);
$registro->adicionarNota($disciplina, 8.5);
echo "Nota registrada: " . $registro->getNotas()[$disciplina->getNome()] . "\n";


$advertencia = new Advertencia($aluno, 'Falta na aula de Poções');
$advertencia->aplicar();
echo "Advertência aplicada: " . $advertencia->getDescricao() . "\n";
