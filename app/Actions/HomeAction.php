<?php

declare(strict_types=1);

namespace Bloatless\EndocoreApp\Actions;

use Bloatless\Endocore\Action\HtmlAction;
use Bloatless\Endocore\Http\Response;
use Bloatless\EndocoreApp\Domains\HomeDomain;

/**
 * Class HomeAction
 *
 * This is an example of a HtmlAction. In every HtmlAction you have access to the HtmlResponder and
 * can render html templates.
 *
 * @package Bloatless\EndocoreApp\Actions
 */
class HomeAction extends HtmlAction
{
    /**
     * Every Action needs to have a "__invoke" methods which is automatically executed by the application.
     * This methods needs to return the response which will than be send to the client.
     *
     * @param array $arguments Possible arguments from the URL.
     * @return Response
     */
    public function __invoke(array $arguments = []): Response
    {

        // this assigns a template variable call "firstname" to your view:
        $this->responder->assign(['firstname' => 'Homer']);

        // Fetch some data from a domain:
        $domain = new HomeDomain;
        $data = [
            'name' => $domain->getName(),
        ];

        // Render and return the "/resources/views/home.phtml" view. (Passing the array $data to the template):
        return $this->responder->show('home', $data);
    }
}
