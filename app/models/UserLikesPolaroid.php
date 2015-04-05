<?php

class UserLikesPolaroid extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var integer
     */
    public $id_polaroid;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_polaroid', 'Polaroids', 'id', array('alias' => 'Polaroids'));
        $this->belongsTo('id_user', 'Users', 'id', array('alias' => 'Users'));
        $this->belongsTo('id_polaroid', 'Polaroids', 'id', NULL);
        $this->belongsTo('id_user', 'Users', 'id', NULL);
    }

}
