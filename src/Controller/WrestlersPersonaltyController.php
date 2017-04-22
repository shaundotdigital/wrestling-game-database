<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WrestlersPersonalty Controller
 *
 * @property \App\Model\Table\WrestlersPersonaltyTable $WrestlersPersonalty
 */
class WrestlersPersonaltyController extends AppController
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
        $wrestlersPersonalty = $this->paginate($this->WrestlersPersonalty);

        $this->set(compact('wrestlersPersonalty'));
        $this->set('_serialize', ['wrestlersPersonalty']);
    }

    /**
     * View method
     *
     * @param string|null $id Wrestlers Personalty id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wrestlersPersonalty = $this->WrestlersPersonalty->get($id, [
            'contain' => ['Wrestlers', 'Personalities']
        ]);

        $this->set('wrestlersPersonalty', $wrestlersPersonalty);
        $this->set('_serialize', ['wrestlersPersonalty']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wrestlersPersonalty = $this->WrestlersPersonalty->newEntity();
        if ($this->request->is('post')) {
            $wrestlersPersonalty = $this->WrestlersPersonalty->patchEntity($wrestlersPersonalty, $this->request->getData());
            if ($this->WrestlersPersonalty->save($wrestlersPersonalty)) {
                $this->Flash->success(__('The wrestlers personalty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers personalty could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersPersonalty->Wrestlers->find('list', ['limit' => 200]);
        $personalities = $this->WrestlersPersonalty->Personalities->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersPersonalty', 'wrestlers', 'personalities'));
        $this->set('_serialize', ['wrestlersPersonalty']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wrestlers Personalty id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wrestlersPersonalty = $this->WrestlersPersonalty->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wrestlersPersonalty = $this->WrestlersPersonalty->patchEntity($wrestlersPersonalty, $this->request->getData());
            if ($this->WrestlersPersonalty->save($wrestlersPersonalty)) {
                $this->Flash->success(__('The wrestlers personalty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers personalty could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersPersonalty->Wrestlers->find('list', ['limit' => 200]);
        $personalities = $this->WrestlersPersonalty->Personalities->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersPersonalty', 'wrestlers', 'personalities'));
        $this->set('_serialize', ['wrestlersPersonalty']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wrestlers Personalty id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wrestlersPersonalty = $this->WrestlersPersonalty->get($id);
        if ($this->WrestlersPersonalty->delete($wrestlersPersonalty)) {
            $this->Flash->success(__('The wrestlers personalty has been deleted.'));
        } else {
            $this->Flash->error(__('The wrestlers personalty could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
