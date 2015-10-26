<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 *
 * @author artem
 */
class JobsController extends AppController{
    
    public function view(){
        $id = $this->request->query['id'];
        $job = $this->Jobs->get($id);
        $this->set('job', $job);
        $this->set('_serialize', ['job']);
        return $this->RequestHandler->renderAs($this, 'json');
    }
    
    public function browse(){
        $jobs = $this->Jobs->find('all')->toArray();
        $this->set('jobs', $jobs);
        $this->set('_serialize', ['jobs']);
        return $this->RequestHandler->renderAs($this, 'json');
    }
    
    public function search(){
        $tag = $this->request->query['tag'];
        $jobs = $this->Jobs->find('all')
                ->where(["MATCH (Jobs.tags) AGAINST ('$tag')"])->toArray();
         $this->set('jobs', $jobs);
        $this->set('_serialize', ['jobs']);
        return $this->RequestHandler->renderAs($this, 'json');
    }
    
}
