<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reactions Controller
 *
 * @property \App\Model\Table\ReactionsTable $Reactions
 */
class ReactionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $reactions = $this->paginate($this->Reactions);

        $this->set(compact('reactions'));
        $this->set('_serialize', ['reactions']);
    }

    /**
     * View method
     *
     * @param string|null $id Reaction id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reaction = $this->Reactions->get($id, [
            'contain' => ['Wrestlers']
        ]);

        $this->set('reaction', $reaction);
        $this->set('_serialize', ['reaction']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reaction = $this->Reactions->newEntity();
        if ($this->request->is('post')) {
            $reaction = $this->Reactions->patchEntity($reaction, $this->request->getData());
            if ($this->Reactions->save($reaction)) {
                $this->Flash->success(__('The reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reaction could not be saved. Please, try again.'));
        }
        $this->set(compact('reaction'));
        $this->set('_serialize', ['reaction']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reaction id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reaction = $this->Reactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reaction = $this->Reactions->patchEntity($reaction, $this->request->getData());
            if ($this->Reactions->save($reaction)) {
                $this->Flash->success(__('The reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reaction could not be saved. Please, try again.'));
        }
        $this->set(compact('reaction'));
        $this->set('_serialize', ['reaction']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reaction id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reaction = $this->Reactions->get($id);
        if ($this->Reactions->delete($reaction)) {
            $this->Flash->success(__('The reaction has been deleted.'));
        } else {
            $this->Flash->error(__('The reaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
