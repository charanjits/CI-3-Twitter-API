<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

use Abraham\TwitterOAuth\TwitterOAuth;

class Welcome extends CI_Controller {
    private $twitterAPI;
    private $data;

    public function __construct(){
        parent::__construct();

        $this->config->load( 'twitter' );
        // $twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
        $this->twitterAPI = new TwitterOAuth( config_item( 'consumer_key' ), config_item( 'consumer_secret' ) );
    }

    public function index() {
        $this->data['tweets']  = array();
        $this->data['hashtag'] = config_item( 'search_hashtag' );
        $this->data['error']   = 'No tweets found! Try <a href="'. base_url() . '">reloading</a> the page.';

        // Search tweets
        $result = $this->twitterAPI->get( 'search/tweets', array (
                'q'           => $this->data['hashtag'],
                'count'       => config_item( 'tweets_count' )
        ) );

        if( $this->twitterAPI->getLastHttpCode() == 200 ) {
            // Filter tweets
            $this->_filter_tweets($result->statuses);
            $this->data['tweets'] = $result->statuses;
        }

        $this->load->view( 'header' );
        $this->load->view( 'tweets', $this->data );
        $this->load->view( 'footer' );
    }

    /**
     * This method will remove unwanted tweets
     * @param array $tweets
     * @param boolean $retweeted
     */
    private function _filter_tweets( &$tweets = NULL, $retweeted = TRUE ){
        if (! empty( $tweets ) && is_array( $tweets )){
            foreach( $tweets as $key => $tweet ) {
                if( $retweeted === TRUE && $tweet->retweet_count == '0' ) {
                    // Remove unwanted tweets
                    unset($tweets[$key]);
                }
            }
        }
    }
}
