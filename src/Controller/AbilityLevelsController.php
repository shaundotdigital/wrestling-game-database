<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AbilityLevels Controller
 *
 * @property \App\Model\Table\AbilityLevelsTable $AbilityLevels
 */
class AbilityLevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $abilityLevels = $this->paginate($this->AbilityLevels);

        $this->set(compact('abilityLevels'));
        $this->set('_serialize', ['abilityLevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Ability Level id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $abilityLevel = $this->AbilityLevels->get($id, [
            'contain' => []
        ]);

        $this->set('abilityLevel', $abilityLevel);
        $this->set('_serialize', ['abilityLevel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $abilityLevel = $this->AbilityLevels->newEntity();
        if ($this->request->is('post')) {
            $abilityLevel = $this->AbilityLevels->patchEntity($abilityLevel, $this->request->getData());
            if ($this->AbilityLevels->save($abilityLevel)) {
                $this->Flash->success(__('The ability level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ability level could not be saved. Please, try again.'));
        }
        $this->set(compact('abilityLevel'));
        $this->set('_serialize', ['abilityLevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ability Level id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $abilityLevel = $this->AbilityLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $abilityLevel = $this->AbilityLevels->patchEntity($abilityLevel, $this->request->getData());
            if ($this->AbilityLevels->save($abilityLevel)) {
                $this->Flash->success(__('The ability level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ability level could not be saved. Please, try again.'));
        }
        $this->set(compact('abilityLevel'));
        $this->set('_serialize', ['abilityLevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ability Level id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $abilityLevel = $this->AbilityLevels->get($id);
        if ($this->AbilityLevels->delete($abilityLevel)) {
            $this->Flash->success(__('The ability level has been deleted.'));
        } else {
            $this->Flash->error(__('The ability level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
