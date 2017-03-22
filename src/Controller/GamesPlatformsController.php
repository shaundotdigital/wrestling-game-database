<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GamesPlatforms Controller
 *
 * @property \App\Model\Table\GamesPlatformsTable $GamesPlatforms
 */
class GamesPlatformsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Games', 'Platforms']
        ];
        $gamesPlatforms = $this->paginate($this->GamesPlatforms);

        $this->set(compact('gamesPlatforms'));
        $this->set('_serialize', ['gamesPlatforms']);
    }

    /**
     * View method
     *
     * @param string|null $id Games Platform id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gamesPlatform = $this->GamesPlatforms->get($id, [
            'contain' => ['Games', 'Platforms']
        ]);

        $this->set('gamesPlatform', $gamesPlatform);
        $this->set('_serialize', ['gamesPlatform']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gamesPlatform = $this->GamesPlatforms->newEntity();
        if ($this->request->is('post')) {
            $gamesPlatform = $this->GamesPlatforms->patchEntity($gamesPlatform, $this->request->getData());
            if ($this->GamesPlatforms->save($gamesPlatform)) {
                $this->Flash->success(__('The games platform has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The games platform could not be saved. Please, try again.'));
        }
        $games = $this->GamesPlatforms->Games->find('list', ['limit' => 200]);
        $platforms = $this->GamesPlatforms->Platforms->find('list', ['limit' => 200]);
        $this->set(compact('gamesPlatform', 'games', 'platforms'));
        $this->set('_serialize', ['gamesPlatform']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Games Platform id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gamesPlatform = $this->GamesPlatforms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gamesPlatform = $this->GamesPlatforms->patchEntity($gamesPlatform, $this->request->getData());
            if ($this->GamesPlatforms->save($gamesPlatform)) {
                $this->Flash->success(__('The games platform has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The games platform could not be saved. Please, try again.'));
        }
        $games = $this->GamesPlatforms->Games->find('list', ['limit' => 200]);
        $platforms = $this->GamesPlatforms->Platforms->find('list', ['limit' => 200]);
        $this->set(compact('gamesPlatform', 'games', 'platforms'));
        $this->set('_serialize', ['gamesPlatform']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Games Platform id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gamesPlatform = $this->GamesPlatforms->get($id);
        if ($this->GamesPlatforms->delete($gamesPlatform)) {
            $this->Flash->success(__('The games platform has been deleted.'));
        } else {
            $this->Flash->error(__('The games platform could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
