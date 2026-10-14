<?php



class alunos 
{
   
private string $nome;
private int $idade;
private string $curso;
private bool $matriculado;
private float$nota2;
private float$nota1;

public function __construct(string $nome, int $idade, string $curso)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;

        $this->matriculado = false;
        $this->nota1 = 0.0;
        $this->nota2 = 0.0;
    }


    public function getnome(): string{
        return $this->nome;
    }

    public function setnome(string $nome){
        $this->nome = $nome;
    }
    
    public function getidade(): int{
        return $this->idade;
    }

    public function setidade(int $idade){
        $this-> idade = $idade;
    }
    
    public function getcurso(): string{
        return $this->curso;
    }

    public function setcurso(string $curso){
        $this->curso = $curso;
    }

    public function ismatriculado(): bool{
        return $this->matriculado;
    }

    public function setmatriculado(bool $matriculado){
        $this->matriculado = $matriculado;
    }

    public function getnota1(): float{
        return $this->nota1;
    }

    public function setnota1(float $nota1){
        $this->nota1 = $nota1;
    }

    public function getnota2(): float{
        return $this->nota2;
    }

    public function setnota2(float $nota2){
        $this->nota2 = $nota2;
    }

    public function matricular()
    {
        if(!$this->matriculado){
            $this->matriculado = true;
            echo "Aluno(a) {$this->nome} matriculado(a) com sucesso!";
        } else {
            echo "Aluno(a) {$this->nome} já está matriculado(a).";
        }
    }

    public function cancelarMatricula()
    {
        if($this->matriculado==true){
            $this->matriculado = false;
            echo"Aluno(a) {$this->nome} cancelou a matrícula com sucesso!";
        }else{
            echo "Aluno(a) {$this->nome} não está matriculado(a).";
        }
    }

    public function verificarMaioridade(){
        if($this->idade>=18){
            echo "Aluno(a) {$this->nome} é maior de idade.";
        } else {
            echo "Aluno(a) {$this->nome} não é maior de idade.";
        }
    }

    public function cadastrarNotas(float$nota1, float$nota2)
    {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        echo "Notas cadastradas com sucesso para o(a) aluno(a) {$this->nome}.";
    }

    public function calcularMedia(): float
    {
        return ($this->nota1 + $this->nota2) / 2;
    }       

    public function verificarAprovacao(){
        if($this->calcularMedia() >= 6.0) {
            echo "Aluno(a) {$this->nome} foi aprovado(a) com média: " . $this->calcularMedia();
        } elseif($this->calcularMedia() < 6.0) {
            echo "Aluno(a) {$this->nome} foi reprovado(a) com média: " . $this->calcularMedia();
        }else {
            echo "Aluno(a) {$this->nome} está em recuperação com média: " . $this->calcularMedia();
        }
    }

    public function exibirInformacoes()
    {
        echo "Nome: {$this->nome}</br>";
        echo "Idade: {$this->idade}</br>";
        echo "Curso: {$this->curso}</br>";
        echo "Matriculado: " . ($this->matriculado ? 'Sim' : 'Não') . "</br>";
        echo "Nota 1: {$this->nota1}</br>";
        echo "Nota 2: {$this->nota2}</br>";
        echo "Média: " . $this->calcularMedia() . "</br>";
    }

    
}
$alunos = new alunos("Vinicius", 20, "Engenharia de Software");
$alunos -> exibirInformacoes();
$alunos-> calcularMedia(90, 80);
$alunos-> verificarAprovacao();
$alunos-> cancelarMatricula();