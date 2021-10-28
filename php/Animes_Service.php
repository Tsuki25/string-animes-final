<?php
class Animes_Service{
    
    private $connection;
    
    public function __construct($dbname, $host, $user, $senha) {//CONSTRUTOR PARA O BANCO DE DADOS
        try{//TRY CATCH PARA TRATAMENTO DE ERROS
            $this -> connection = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);//CRIANDO O PDO DO BANCO
            
        } catch (PDOException $e) {//ERRO DO PDO
            echo "ERRO COM BANCO DE DADOS".$e->getMessage();
            exit();
            
        }catch(Exception $e){//ERRO COMUM SEM SER DO PDO
            echo "ERRO GENERICO".$e->getMessage();
            exit();
        } 
    }


    function cadastarAnimes($nomeAnime, $sinopse,$genero,$dataLancamento,$statusLancamento, $animeImagem) {
        $sql = 'insert into animes (nomeAnime, sinopse, genero, dataLancamento, statusLancamento, animeImagem) 
        values (:nomeAnime, :sinopse, :genero, :dataLancamento, :statusLancamento, :animeImagem)';
        $result = $this -> connection -> prepare ($sql);
        $result -> bindValue(':nomeAnime', $nomeAnime );
        $result -> bindValue(':sinopse', $sinopse );
        $result -> bindValue(':genero', $genero  );
        $result -> bindValue(':dataLancamento', $dataLancamento );
        $result -> bindValue(':statusLancamento', $statusLancamento );
        $result -> bindValue(':animeImagem', $animeImagem );
        $result -> execute();
    }


    //LER
    /*$sql = 'select * from animes';
    $result = $connection -> prepare ($sql);
    $result -> execute();
    var_dump($result -> fetchAll(PDO::FETCH_OBJ));*/
    
    public function carregarCards($reg_pag, $pg){
        $inicio = ($pg - 1) * $reg_pag;
        
        $sql = $this->connection->prepare( "SELECT nomeAnime, sinopse, animeImagem FROM animes LIMIT $inicio,$reg_pag;");//PEGA TODOS OS VIDEOS
        $sql->execute();

        if ($sql->rowCount() > 0) {//Enquanto tiverem linhas na tabela
            foreach ($sql as $res) {
                $nomeAnime = $res['nomeAnime'];
                $sinopse = $res['sinopse'];
                $animeImagem = $res['animeImagem'];
                echo "
                <div class='card bg-black border-purple pb-4 cursorh-pointer'>
                <img src='img/animes-banner/$animeImagem.jpg' class='anime-image' alt=''>
                <div class='conteudo'>
                    <h2 class='text-center text-light my-2'>$nomeAnime</h2>
                    <div class='card-sinopse'>
                        <p class='text-justify text-light'>
                           $sinopse
                        </p>
                        <a href=''> Mais... </a>
                    </div>
                    <div class='float-right mt-3'>
                        <div class='btn-group'>
                            <button type='button' class='btn btn-outline-light btn-editar'>Editar</button>
                            <button type='button' class='btn btn-outline-light btn-excluir'>Excluir</button>
                        </div>
                    </div>
                </div>
            </div>";
            }
        }
        
        $total = $this->connection->prepare("SELECT * FROM animes;");
        $total->execute();
        $tp = $total->rowCount() / $reg_pag;
        $tp = ceil($tp);

        echo "<div class='paginacao'>";
        $anterior = $pg - 1;
        $proximo = $pg + 1;
        if ($pg == $tp && $anterior == 0) {
            echo "<a href='?pagina=$anterior' style='pointer-events: none; opacity: 0.5;'><img src='img/back.png' style='widht:50px; height:50px;'></a>"
            . " | " .
            "<a href='?pagina=$proximo' style='pointer-events: none; opacity: 0.5;'><img src='img/next.png' style='widht:50px; height:50px;'></a>" .
            "</div>";
        } else if ($pg == $tp) {
            echo "<a href='?pagina=$anterior'><img src='img/back.png' style='widht:50px; height:50px;'></a>"
            . " | " .
            "<a href='?pagina=$proximo' style='pointer-events: none; opacity: 0.5;'><img src='img/next.png' style='widht:50px; height:50px;'></a>" .
            "</div>";
        } else if ($anterior == 0) {
            echo "<a href='?pagina=$anterior' style='pointer-events: none; opacity: 0.5;'><img src='img/back.png' style='widht:50px; height:50px;'></a>"
            . " | " .
            "<a href='?pagina=$proximo' ><img src='img/next.png' style='widht:50px; height:50px;'></a>" .
            "</div>";
        } else {
            echo "<a href='?pagina=$anterior'><img src='img/back.png' style='widht:50px; height:50px;'></a>"
            . " | " .
            "<a href='?pagina=$proximo'><img src='img/next.png' style='widht:50px; height:50px;'></a>" .
            "</div>";
        }
    }
}