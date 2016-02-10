<?php
/**
 * Class to persist data on session
 */
namespace App;

class MatrixSession
{
    /**
     * Constructor to persist data on session
     */
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    /**
     * Destroys the data persisted in session
     * @return 
     */
    public function unsetMatrix(){
        session_destroy();
    }
}