<?php 
class Review{
    private $id;
    private $user_id;
    private $event_id;
    private $pontuacao;
    private $comment;

    function getReviews($event_id){
        $this-> event_id = $event_id;
        $db_name = "lab_programacaodb";
        $host = "localhost";
        $user = "root";
        $password = "";

        $conn = new mysqli($host, $user, $password, $db_name);
        if ($conn->connect_error) echo "Falha na conexão: " . $conn->connect_error;
        
        $query = "SELECT r.comentario, r.pontuacao, u.nome,u.foto from reviews as r 
        inner join users as u on r.usuario_id = u.id
        where r.evento_id = $this->event_id
         ORDER BY r.id DESC";
        $result = $conn->query($query);
        
        $reviewData = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $reviewData[] = $row;
            }
        }

        return $reviewData;
    }
}

?>