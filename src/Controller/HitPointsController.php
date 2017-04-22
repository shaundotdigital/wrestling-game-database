<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HitPoints Controller
 *
 * @property \App\Model\Table\HitPointsTable $HitPoints
 */
class HitPointsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hitPoints = $this->paginate($this->HitPoints);

        $this->set(compact('hitPoints'));
        $this->set('_serialize', ['hitPoints']);
    }

    /**
     * View method
     *
     * @param string|null $id Hit Point id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hitPoint = $this->HitPoints->get($id, [
            'contain' => []
        ]);

        $this->set('hitPoint', $hitPoint);
        $this->set('_serialize', ['hitPoint']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hitPoint = $this->HitPoints->newEntity();
        if ($this->request->is('post')) {
            $hitPoint = $this->HitPoints->patchEntity($hitPoint, $this->request->getData());
            if ($this->HitPoints->save($hitPoint)) {
                $this->Flash->success(__('The hit point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hit point could not be saved. Please, try again.'));
        }
        $this->set(compact('hitPoint'));
        $this->set('_serialize', ['hitPoint']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hit Point id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hitPoint = $this->HitPoints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hitPoint = $this->HitPoints->patchEntity($hitPoint, $this->request->getData());
            if ($this->HitPoints->save($hitPoint)) {
                $this->Flash->success(__('The hit point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hit point could not be saved. Please, try again.'));
        }
        $this->set(compact('hitPoint'));
        $this->set('_serialize', ['hitPoint']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hit Point id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hitPoint = $this->HitPoints->get($id);
        if ($this->HitPoints->delete($hitPoint)) {
            $this->Flash->success(__('The hit point has been deleted.'));
        } else {
            $this->Flash->error(__('The hit point could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
