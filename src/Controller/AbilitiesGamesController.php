<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AbilitiesGames Controller
 *
 * @property \App\Model\Table\AbilitiesGamesTable $AbilitiesGames
 */
class AbilitiesGamesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Abilities', 'Games']
        ];
        $abilitiesGames = $this->paginate($this->AbilitiesGames);

        $this->set(compact('abilitiesGames'));
        $this->set('_serialize', ['abilitiesGames']);
    }

    /**
     * View method
     *
     * @param string|null $id Abilities Game id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $abilitiesGame = $this->AbilitiesGames->get($id, [
            'contain' => ['Abilities', 'Games']
        ]);

        $this->set('abilitiesGame', $abilitiesGame);
        $this->set('_serialize', ['abilitiesGame']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $abilitiesGame = $this->AbilitiesGames->newEntity();
        if ($this->request->is('post')) {
            $abilitiesGame = $this->AbilitiesGames->patchEntity($abilitiesGame, $this->request->getData());
            if ($this->AbilitiesGames->save($abilitiesGame)) {
                $this->Flash->success(__('The abilities game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The abilities game could not be saved. Please, try again.'));
        }
        $abilities = $this->AbilitiesGames->Abilities->find('list', ['limit' => 200]);
        $games = $this->AbilitiesGames->Games->find('list', ['limit' => 200]);
        $this->set(compact('abilitiesGame', 'abilities', 'games'));
        $this->set('_serialize', ['abilitiesGame']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Abilities Game id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $abilitiesGame = $this->AbilitiesGames->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $abilitiesGame = $this->AbilitiesGames->patchEntity($abilitiesGame, $this->request->getData());
            if ($this->AbilitiesGames->save($abilitiesGame)) {
                $this->Flash->success(__('The abilities game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The abilities game could not be saved. Please, try again.'));
        }
        $abilities = $this->AbilitiesGames->Abilities->find('list', ['limit' => 200]);
        $games = $this->AbilitiesGames->Games->find('list', ['limit' => 200]);
        $this->set(compact('abilitiesGame', 'abilities', 'games'));
        $this->set('_serialize', ['abilitiesGame']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Abilities Game id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $abilitiesGame = $this->AbilitiesGames->get($id);
        if ($this->AbilitiesGames->delete($abilitiesGame)) {
            $this->Flash->success(__('The abilities game has been deleted.'));
        } else {
            $this->Flash->error(__('The abilities game could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
