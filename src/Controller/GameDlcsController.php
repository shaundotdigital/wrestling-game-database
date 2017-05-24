<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GameDlcs Controller
 *
 * @property \App\Model\Table\GameDlcsTable $GameDlcs
 */
class GameDlcsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Games']
        ];
        $gameDlcs = $this->paginate($this->GameDlcs);

        $this->set(compact('gameDlcs'));
        $this->set('_serialize', ['gameDlcs']);
    }

    /**
     * View method
     *
     * @param string|null $id Game Dlc id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gameDlc = $this->GameDlcs->get($id, [
            'contain' => ['Games', 'Wrestlers']
        ]);

        $this->set('gameDlc', $gameDlc);
        $this->set('_serialize', ['gameDlc']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gameDlc = $this->GameDlcs->newEntity();
        if ($this->request->is('post')) {
            $gameDlc = $this->GameDlcs->patchEntity($gameDlc, $this->request->getData());
            if ($this->GameDlcs->save($gameDlc)) {
                $this->Flash->success(__('The game dlc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The game dlc could not be saved. Please, try again.'));
        }
        $games = $this->GameDlcs->Games->find('list', ['limit' => 200]);
        $this->set(compact('gameDlc', 'games'));
        $this->set('_serialize', ['gameDlc']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Game Dlc id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gameDlc = $this->GameDlcs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gameDlc = $this->GameDlcs->patchEntity($gameDlc, $this->request->getData());
            if ($this->GameDlcs->save($gameDlc)) {
                $this->Flash->success(__('The game dlc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The game dlc could not be saved. Please, try again.'));
        }
        $games = $this->GameDlcs->Games->find('list', ['limit' => 200]);
        $this->set(compact('gameDlc', 'games'));
        $this->set('_serialize', ['gameDlc']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Game Dlc id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gameDlc = $this->GameDlcs->get($id);
        if ($this->GameDlcs->delete($gameDlc)) {
            $this->Flash->success(__('The game dlc has been deleted.'));
        } else {
            $this->Flash->error(__('The game dlc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
