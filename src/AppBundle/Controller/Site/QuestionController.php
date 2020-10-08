<?

namespace AppBundle\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionController extends Controller
{
    public function indexAction()
    {
        return $this->render('site/questions/index.html.twig',[
            
        ]);
    }

    public function createAction()
    {
        return $this->render('site/questions/create.html.twig',[
            
        ]);
    }

    public function showAction($id = null)
    {
        return $this->render('site/questions/show.html.twig',[

        ]);
    }


}
