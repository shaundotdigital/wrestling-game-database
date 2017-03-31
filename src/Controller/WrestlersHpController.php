<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WrestlersHp Controller
 *
 * @property \App\Model\Table\WrestlersHpTable $WrestlersHp
 */
class WrestlersHpController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wrestlers']
        ];
        $wrestlersHp = $this->paginate($this->WrestlersHp);

        $this->set(compact('wrestlersHp'));
        $this->set('_serialize', ['wrestlersHp']);
    }

    /**
     * View method
     *
     * @param string|null $id Wrestlers Hp id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wrestlersHp = $this->WrestlersHp->get($id, [
            'contain' => ['Wrestlers']
        ]);

        $this->set('wrestlersHp', $wrestlersHp);
        $this->set('_serialize', ['wrestlersHp']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wrestlersHp = $this->WrestlersHp->newEntity();
        if ($this->request->is('post')) {
            $wrestlersHp = $this->WrestlersHp->patchEntity($wrestlersHp, $this->request->getData());

            if ($this->WrestlersHp->save($wrestlersHp)) {
                $this->Flash->success(__('The wrestlers hp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers hp could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersHp->Wrestlers->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersHp', 'wrestlers'));
        $this->set('_serialize', ['wrestlersHp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wrestlers Hp id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wrestlersHp = $this->WrestlersHp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wrestlersHp = $this->WrestlersHp->patchEntity($wrestlersHp, $this->request->getData());
            if ($this->WrestlersHp->save($wrestlersHp)) {
                $this->Flash->success(__('The wrestlers hp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers hp could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersHp->Wrestlers->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersHp', 'wrestlers'));
        $this->set('_serialize', ['wrestlersHp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wrestlers Hp id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wrestlersHp = $this->WrestlersHp->get($id);
        if ($this->WrestlersHp->delete($wrestlersHp)) {
            $this->Flash->success(__('The wrestlers hp has been deleted.'));
        } else {
            $this->Flash->error(__('The wrestlers hp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
