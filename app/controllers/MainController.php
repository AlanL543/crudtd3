<?php
namespace controllers;
use services\ui\UIGroups;
use Ubiquity\attributes\items\router\Route;

/**
 * Controller MainController
 */
class MainController extends \controllers\ControllerBase{

    #[Route ('#/_default',name:'home')]
    public function index(){
        $this->loadDefaultView();
    }

    public function initialize() {
        $this->ui=new UIGroups($this);
        parent::initialize();
    }

    #[Autowired]
    private OrgaRepository $repo;

    public function setRepo(OrgaRepository $repo): void {
        $this->repo = $repo;
    }
}