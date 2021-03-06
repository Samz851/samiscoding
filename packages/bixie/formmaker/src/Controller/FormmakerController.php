<?php

namespace Bixie\Formmaker\Controller;

use Pagekit\Application as App;
use Bixie\Formmaker\Model\Form;
use Bixie\Formmaker\Model\Submission;

/**
 * @Access(admin=true)
 */
class FormmakerController {

	/**
	 * @Route("/", methods="GET")
	 */
	public function indexAction () {
        $formmaker = App::module('bixie/formmaker');

		return [
			'$view' => [
				'title' => __('Formmaker'),
				'name' => 'bixie/formmaker/admin/forms.php'
			],
			'$data' => [
				'config' => $formmaker->config()
			],
            'frameworkValid' => $formmaker->checkFramework()
		];
	}

	/**
	 * @Route("/submissions", methods="GET")
	 * @Request({"filter": "array", "page":"int"})
	 */
	public function submissionsAction ($filter = null, $page = 0) {
        $formmaker = App::module('bixie/formmaker');

		return [
			'$view' => [
				'title' => __('Submissions'),
				'name' => 'bixie/formmaker/admin/submissions.php'
			],
			'$data' => [
				'forms' => array_values(Form::query()->get()),
				'statuses' => Submission::getStatuses(),
				'config'   => [
					'filter' => $filter,
					'page'   => $page
				]
			],
            'frameworkValid' => $formmaker->checkFramework()
		];
	}

	/**
	 * @Route("/submissions/csv", methods="GET")
	 */
	public function csvAction () {
		//todo
		return [
			'$data' => [
			]
		];
	}

}
