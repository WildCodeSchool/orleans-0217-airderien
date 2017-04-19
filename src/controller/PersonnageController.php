<?php


namespace air_de_rien\controller;


use air_de_rien\model\DB;
use air_de_rien\form\PersonnageFilter;
use air_de_rien\form\PersonnageForm;
use air_de_rien\model\Personnage;
use air_de_rien\model\PersonnageRequete;


class PersonnageController extends Controller
{
    /**
     * récupération de tous les personnages
     * @return string
     */
    public function listAll()
    {
        $db = new DB();
        $personnages = $db -> findAll('personnage');
        return $this->getTwig()
            ->render('admin/personnageView.html.twig', ['personnages'=>$personnages]);
    }


    public function index()
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

        $personnages = $requete-> findAll('personnage');
        $personnage = new Personnage();
        $spectacles = $db -> findAll('spectacle');
        $membres = $db -> findAll('membre');

        return $this->getTwig()
            ->render('admin/PersonnageView.html.twig',
            ['personnages'=>$personnages,
            'personnage'=>$personnage,
            'spectacles'=>$spectacles,
            'membres'=>$membres,
            'typeAction'=>'add',
            'form'=>$form]);
    }

    public function addPersonnage()
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = htmlentities(trim($val));
                }
//                if(isset($_FILES['photoPersonnage'])){
//                    $errors= array();
//                    $file_name = $_FILES['photoPersonnage']['name'];
//                    $file_size =$_FILES['photoPersonnage']['size'];
//                    $file_tmp =$_FILES['photoPersonnage']['tmp_name'];
//                    $file_ext=strtolower(end(explode('.',$_FILES['photoPersonnage']['name'])));
//
//                    $expensions= array("jpeg","jpg","png");
//
//                    if(in_array($file_ext,$expensions)=== false){
//                        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
//                    }
//
//                    if($file_size > 1097152){
//                        $errors[]='File size must be excately 1 MB';
//                    }
//
//                    if(empty($errors)==true){
//                        move_uploaded_file($file_tmp,"images/".$file_name);
//                        echo "Success";
//                    }else{
//                        print_r($errors);
//                    }
//                }
                $requete->addPersonnage($postClean);
                header('Location:admin.php?route=showPersonnage');
            }

        $personnages = $requete->findAll('personnage');
        $personnage = new Personnage();
        $spectacles = $db -> findAll('spectacle');
        $membres = $db -> findAll('membre');

        return $this->getTwig()
        ->render('admin/PersonnageView.html.twig',
            ['personnages'=>$personnages,
            'form'=>$form,
            'personnage'=>$personnage,
            'spectacles'=>$spectacles,
            'membres'=>$membres,
            'typeAction'=>'add'
        ]);
    }

    public function deletePersonnage()
    {
        $del = new PersonnageRequete();
        $del->deletePersonnage();
        header('Location:admin.php?route=showPersonnage');
    }

    public function updatePersonnage($id)
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->updatePersonnage($postClean);
            header('Location:admin.php?route=showPersonnage');
        }

        $personnages = $requete->findAll('personnage');
        $personnage = $requete->findOne('personnage', $id);
        $spectacles = $db -> findAll('spectacle');
        $membres = $db -> findAll('membre');

        return $this->getTwig()
        ->render('admin/PersonnageView.html.twig',
            ['personnages'=>$personnages,
            'form'=>$form,
            'personnage'=>$personnage,
            'spectacles'=>$spectacles,
            'membres'=>$membres,
            'typeAction'=>'update'
            ]);
    }



}