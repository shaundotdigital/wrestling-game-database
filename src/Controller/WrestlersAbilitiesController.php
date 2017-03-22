<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WrestlersAbilities Controller
 *
 * @property \App\Model\Table\WrestlersAbilitiesTable $WrestlersAbilities
 */
class WrestlersAbilitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wrestlers', 'Abilities']
        ];
        $wrestlersAbilities = $this->paginate($this->WrestlersAbilities);

        $this->set(compact('wrestlersAbilities'));
        $this->set('_serialize', ['wrestlersAbilities']);
    }

    /**
     * View method
     *
     * @param string|null $id Wrestlers Ability id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wrestlersAbility = $this->WrestlersAbilities->get($id, [
            'contain' => ['Wrestlers', 'Abilities']
        ]);

        $this->set('wrestlersAbility', $wrestlersAbility);
        $this->set('_serialize', ['wrestlersAbility']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wrestlersAbility = $this->WrestlersAbilities->newEntity();
        if ($this->request->is('post')) {
            $wrestlersAbility = $this->WrestlersAbilities->patchEntity($wrestlersAbility, $this->request->getData());
            if ($this->WrestlersAbilities->save($wrestlersAbility)) {
                $this->Flash->success(__('The wrestlers ability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers ability could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersAbilities->Wrestlers->find('list', ['limit' => 200]);
        $abilities = $this->WrestlersAbilities->Abilities->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersAbility', 'wrestlers', 'abilities'));
        $this->set('_serialize', ['wrestlersAbility']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wrestlers Ability id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wrestlersAbility = $this->WrestlersAbilities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wrestlersAbility = $this->WrestlersAbilities->patchEntity($wrestlersAbility, $this->request->getData());
            if ($this->WrestlersAbilities->save($wrestlersAbility)) {
                $this->Flash->success(__('The wrestlers ability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers ability could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersAbilities->Wrestlers->find('list', ['limit' => 200]);
        $abilities = $this->WrestlersAbilities->Abilities->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersAbility', 'wrestlers', 'abilities'));
        $this->set('_serialize', ['wrestlersAbility']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wrestlers Ability id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wrestlersAbility = $this->WrestlersAbilities->get($id);
        if ($this->WrestlersAbilities->delete($wrestlersAbility)) {
            $this->Flash->success(__('The wrestlers ability has been deleted.'));
        } else {
            $this->Flash->error(__('The wrestlers ability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
