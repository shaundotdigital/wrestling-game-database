<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AttributesGames Controller
 *
 * @property \App\Model\Table\AttributesGamesTable $AttributesGames
 */
class AttributesGamesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Attributes', 'Games']
        ];
        $attributesGames = $this->paginate($this->AttributesGames);

        $this->set(compact('attributesGames'));
        $this->set('_serialize', ['attributesGames']);
    }

    /**
     * View method
     *
     * @param string|null $id Attributes Game id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attributesGame = $this->AttributesGames->get($id, [
            'contain' => ['Attributes', 'Games']
        ]);

        $this->set('attributesGame', $attributesGame);
        $this->set('_serialize', ['attributesGame']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attributesGame = $this->AttributesGames->newEntity();
        if ($this->request->is('post')) {
            $attributesGame = $this->AttributesGames->patchEntity($attributesGame, $this->request->getData());
            if ($this->AttributesGames->save($attributesGame)) {
                $this->Flash->success(__('The attributes game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attributes game could not be saved. Please, try again.'));
        }
        $attributes = $this->AttributesGames->Attributes->find('list', ['limit' => 200]);
        $games = $this->AttributesGames->Games->find('list', ['limit' => 200]);
        $this->set(compact('attributesGame', 'attributes', 'games'));
        $this->set('_serialize', ['attributesGame']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Attributes Game id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attributesGame = $this->AttributesGames->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attributesGame = $this->AttributesGames->patchEntity($attributesGame, $this->request->getData());
            if ($this->AttributesGames->save($attributesGame)) {
                $this->Flash->success(__('The attributes game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attributes game could not be saved. Please, try again.'));
        }
        $attributes = $this->AttributesGames->Attributes->find('list', ['limit' => 200]);
        $games = $this->AttributesGames->Games->find('list', ['limit' => 200]);
        $this->set(compact('attributesGame', 'attributes', 'games'));
        $this->set('_serialize', ['attributesGame']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Attributes Game id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attributesGame = $this->AttributesGames->get($id);
        if ($this->AttributesGames->delete($attributesGame)) {
            $this->Flash->success(__('The attributes game has been deleted.'));
        } else {
            $this->Flash->error(__('The attributes game could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
