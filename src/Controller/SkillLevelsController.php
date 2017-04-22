<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SkillLevels Controller
 *
 * @property \App\Model\Table\SkillLevelsTable $SkillLevels
 */
class SkillLevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $skillLevels = $this->paginate($this->SkillLevels);

        $this->set(compact('skillLevels'));
        $this->set('_serialize', ['skillLevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Skill Level id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skillLevel = $this->SkillLevels->get($id, [
            'contain' => []
        ]);

        $this->set('skillLevel', $skillLevel);
        $this->set('_serialize', ['skillLevel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skillLevel = $this->SkillLevels->newEntity();
        if ($this->request->is('post')) {
            $skillLevel = $this->SkillLevels->patchEntity($skillLevel, $this->request->getData());
            if ($this->SkillLevels->save($skillLevel)) {
                $this->Flash->success(__('The skill level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill level could not be saved. Please, try again.'));
        }
        $this->set(compact('skillLevel'));
        $this->set('_serialize', ['skillLevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Skill Level id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skillLevel = $this->SkillLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skillLevel = $this->SkillLevels->patchEntity($skillLevel, $this->request->getData());
            if ($this->SkillLevels->save($skillLevel)) {
                $this->Flash->success(__('The skill level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill level could not be saved. Please, try again.'));
        }
        $this->set(compact('skillLevel'));
        $this->set('_serialize', ['skillLevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Skill Level id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skillLevel = $this->SkillLevels->get($id);
        if ($this->SkillLevels->delete($skillLevel)) {
            $this->Flash->success(__('The skill level has been deleted.'));
        } else {
            $this->Flash->error(__('The skill level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
