<?php



namespace App\Feed;

class Globo{

    /**
     * constante que guarda a URL do fedd RSS da TecMundo
     * @var string
     */
    // const FEED_URL = 'http://pox.globo.com/rss/g1/concursos-e-emprego';
    const FEED_URL = 'https://g1.globo.com/rss/g1/concursos-e-emprego/';

    /**
     * Dados do feed (Instancia do Feed XML)
     * @var SimpleXML
     */
    private $feed = null;
    
    /**
     * Construtor da Classe responsavel por chamar o metodo de carregamento do feed
     */
    public function __construct(){
        $this->loadFeed();
    }

    /**
     * Método reponsavel por carregar os dados do feed RSS
     * @return boolean
     */
    private function loadFeed(){
        //INICIA I CURL
        $curl = curl_init();

        //CONFIGURA O CURL
        curl_setopt_array($curl, [
            CURLOPT_URL             => self::FEED_URL,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CUSTOMREQUEST   =>'GET'            
        ]);

        //EXECUTA A REQUISIÇÃO CURL
        $response = curl_exec($curl);

        //FECHA A CONEXÃO
        curl_close($curl);

        //EXECUTA O MÉTODO QUE TRANSFORMA O CONTEUDO XML EM INSTANCIA DE XML
        return $this->parseXML($response);
    }

    /**
     * Método responsavel por criar uma instancia SimpleXML com base em uma string (conteudo)
     * @param string $response
     * @return boolean
     */
    private function parseXML($response){
        //VERIFICA O CONTEUDO DO RESPONSE
        if(!strlen($response)) return false;

        //CARREGA O XML PARA A CLASSE
        $this->feed = simplexml_load_string($response);

        //SUCESSO
        return true;
    }

    /**
     * Método responsavel por trazer( retornar ) o titulo do feed
     * @return  string
     */
    public function getTitle(){
        return $this->feed->channel->title;
    }

        /**
     * Método responsavel por trazer( retornar ) a Descrição do feed
     * @return  string
     */
    public function getDescription(){
        return $this->feed->channel->description;
    }

        /**
     * Método responsavel por trazer( retornar ) a data de atualização do feed
     * @return  string
     */
    public function getLastUpdate(){
        return $this->feed->channel->lastBuildDate;
    }

        /**
     * Método responsavel por trazer( retornar ) o logo do feed
     * @return  string
     */
    public function getLogo(){
        return $this->feed->channel->image->url;
    }

        /**
     * Método responsavel por trazer( retornar ) os itens do feed
     * @return  string
     */
    public function getItems(){
        return $this->feed->channel->item;
    }

}