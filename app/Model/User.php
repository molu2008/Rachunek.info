<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property PersonalData $PersonalData
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'taki urzytkownik juz istnieje' => array(
                'rule' =>'isUnique',
            )
		),

        'password'=>array(
            'Not empty'=>array(
                'rule'=>'notEmpty'
            )
        ),

        'password_confirmation'=>array(
            'Not empty'=>array(
                'rule'=>'notEmpty'
            )
        ),

		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'musisz wypełnić to pole',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

            'Mach passwords' =>array(
                'rule'=>'matchPasswords',
                'message' => 'Hasła nie są takie same'
            ),
		),
		'admin' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'personal_data_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

    public function matchPasswords($data){
        if($data['password'] == $this->data['User']['password_confirmation']){
            return true;
        }
        $this->invalidate('password_confirmation' , 'Hasła nie sa takie same') ;
        return false;
}


	public $belongsTo = array(
		'PersonalData' => array(
			'className' => 'PersonalData',
			'foreignKey' => 'personal_data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public function beforeSave(){
        if(isset($this->data['User']['password'])){ // is the password is set
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']) ;  // hash the password
        }
    }
}
