<?php
App::uses('AppController', 'Controller');
/**
 * Ranklogs Controller
 *
 * @property Ranklog $Ranklog
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class RanklogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

}
