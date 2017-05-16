<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WrestlersPersonality Controller
 *
 * @property \App\Model\Table\WrestlersPersonalityTable $WrestlersPersonality
 */
class WrestlersPersonalityController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wrestlers', 'Personalities']
        ];
        $wrestlersPersonality = $this->paginate($this->WrestlersPersonality);

        $this->set(compact('wrestlersPersonality'));
        $this->set('_serialize', ['wrestlersPersonality']);
    }

    /**
     * View method
     *
     * @param string|null $id Wrestlers Personality id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wrestlersPersonality = $this->WrestlersPersonality->get($id, [
            'contain' => ['Wrestlers', 'Personalities']
        ]);

        $this->set('wrestlersPersonality', $wrestlersPersonality);
        $this->set('_serialize', ['wrestlersPersonality']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wrestlersPersonality = $this->WrestlersPersonality->newEntity();
        if ($this->request->is('post')) {
            $wrestlersPersonality = $this->WrestlersPersonality->patchEntity($wrestlersPersonality, $this->request->getData());
            if ($this->WrestlersPersonality->save($wrestlersPersonality)) {
                $this->Flash->success(__('The wrestlers personality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers personality could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersPersonality->Wrestlers->find('list', ['limit' => 200]);
        $personalities = $this->WrestlersPersonality->Personalities->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersPersonality', 'wrestlers', 'personalities'));
        $this->set('_serialize', ['wrestlersPersonality']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wrestlers Personality id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wrestlersPersonality = $this->WrestlersPersonality->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wrestlersPersonality = $this->WrestlersPersonality->patchEntity($wrestlersPersonality, $this->request->getData());
            if ($this->WrestlersPersonality->save($wrestlersPersonality)) {
                $this->Flash->success(__('The wrestlers personality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers personality could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersPersonality->Wrestlers->find('list', ['limit' => 200]);
        $personalities = $this->WrestlersPersonality->Personalities->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersPersonality', 'wrestlers', 'personalities'));
        $this->set('_serialize', ['wrestlersPersonality']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wrestlers Personality id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wrestlersPersonality = $this->WrestlersPersonality->get($id);
        if ($this->WrestlersPersonality->delete($wrestlersPersonality)) {
            $this->Flash->success(__('The wrestlers personality has been deleted.'));
        } else {
            $this->Flash->error(__('The wrestlers personality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
