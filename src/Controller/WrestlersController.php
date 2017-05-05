<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wrestlers Controller
 *
 * @property \App\Model\Table\WrestlersTable $Wrestlers
 */
class WrestlersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Genders', 'Heights', 'WeightClasses', 'Reactions', 'Games']
        ];
        $wrestlers = $this->paginate($this->Wrestlers);

        $this->set(compact('wrestlers'));
        $this->set('_serialize', ['wrestlers']);
    }

    public function editAttributes($id = null) {
      $wrestler = $this->Wrestlers->get($id, [
          'contain' => ['Genders', 'Heights', 'WeightClasses', 'Reactions', 'Games', 'Abilities', 'Skills', 'AttributesPoints.Attributes', 'WrestlersHp', 'WrestlersPersonalty']
      ]);

      $attributes = $this->Wrestlers->AttributesPoints->Attributes->find();

      $this->set(compact('wrestler', 'attributes'));
    }

    /**
     * View method
     *
     * @param string|null $id Wrestler id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wrestler = $this->Wrestlers->get($id, [
            'contain' => ['Genders', 'Heights', 'WeightClasses', 'Reactions', 'Games', 'Abilities', 'Skills', 'AttributesPoints', 'WrestlersHp', 'WrestlersPersonalty']
        ]);

        $this->set('wrestler', $wrestler);
        $this->set('_serialize', ['wrestler']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wrestler = $this->Wrestlers->newEntity();
        $hp = $this->Wrestlers->WrestlersHp->newEntity();

        if ($this->request->is('post')) {
            $wrestler = $this->Wrestlers->patchEntity($wrestler, $this->request->getData());


            $hp = $this->Wrestlers->WrestlersHp->patchEntity($hp, $this->request->getData());
            $hp->total_hp = $this->calculateHP($hp);
            $wrestler->wrestlers_hp = $hp;


            if ($this->Wrestlers->save($wrestler)) {
                $this->Flash->success(__('The wrestler has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestler could not be saved. Please, try again.'));
        }
        $genders = $this->Wrestlers->Genders->find('list', ['limit' => 200]);
        $heights = $this->Wrestlers->Heights->find('list', ['limit' => 200]);
        $weightClasses = $this->Wrestlers->WeightClasses->find('list', ['limit' => 200]);
        $reactions = $this->Wrestlers->Reactions->find('list', ['limit' => 200]);
        $games = $this->Wrestlers->Games->find('list', ['limit' => 200]);
        $abilities = $this->Wrestlers->Abilities->find('list', ['limit' => 200]);
        $skills = $this->Wrestlers->Skills->find('list', ['limit' => 200]);
        $this->set(compact('wrestler', 'genders', 'heights', 'weightClasses', 'reactions', 'games', 'abilities', 'skills', 'hp'));
        $this->set('_serialize', ['wrestler']);
    }

    private function calculateHP($wrestlersHp) {
      return $wrestlersHp->head + $wrestlersHp->body + $wrestlersHp->arms + $wrestlersHp->legs;
    }
    /**
     * Edit method
     *
     * @param string|null $id Wrestler id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

    public function edit($id = null)
    {
       $wrestler = $this->Wrestlers->get($id, [
           'contain' => ['Abilities', 'Skills', 'WrestlersHp']
       ]);
       if ($this->request->is(['patch', 'post', 'put'])) {
           $wrestler = $this->Wrestlers->patchEntity($wrestler, $this->request->getData());

           $hp = $wrestler->wrestlers_hp = $this->Wrestlers->WrestlersHp->patchEntity($wrestler->wrestlers_hp, $this->request->getData());
           $hp->total_hp = $this->calculateHP($hp);
           $wrestler->wrestlers_hp = $hp;

           if ($this->Wrestlers->save($wrestler)) {
               $this->Flash->success(__('The wrestler has been saved.'));

               return $this->redirect(['action' => 'index']);
           }
           $this->Flash->error(__('The wrestler could not be saved. Please, try again.'));
       }
       $genders = $this->Wrestlers->Genders->find('list', ['limit' => 200]);
       $heights = $this->Wrestlers->Heights->find('list', ['limit' => 200]);
       $weightClasses = $this->Wrestlers->WeightClasses->find('list', ['limit' => 200]);
       $reactions = $this->Wrestlers->Reactions->find('list', ['limit' => 200]);
       $games = $this->Wrestlers->Games->find('list', ['limit' => 200]);
       $abilities = $this->Wrestlers->Abilities->find('list', ['limit' => 200]);
       $skills = $this->Wrestlers->Skills->find('list', ['limit' => 200]);
       $this->set(compact('wrestler', 'genders', 'heights', 'weightClasses', 'reactions', 'games', 'abilities', 'skills', 'hp'));
       $this->set('_serialize', ['wrestler']);
    }


    /**
     * Delete method
     *
     * @param string|null $id Wrestler id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wrestler = $this->Wrestlers->get($id);
        if ($this->Wrestlers->delete($wrestler)) {
            $this->Flash->success(__('The wrestler has been deleted.'));
        } else {
            $this->Flash->error(__('The wrestler could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
