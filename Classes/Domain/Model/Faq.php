<?php
namespace SKYFILLERS\SfSimpleFaq\Domain\Model;

	/*                                                                        *
	 * This script is backported from the TYPO3 Flow package "TYPO3.Fluid".   *
	 *                                                                        *
	 * It is free software; you can redistribute it and/or modify it under    *
	 * the terms of the GNU Lesser General Public License, either version 3   *
	 *  of the License, or (at your option) any later version.                *
	 *                                                                        *
	 * The TYPO3 project - inspiring people to share!                         *
	 *                                                                        */

/**
 * Frequently asked questions
 *
 * @author Daniel Meyer, Alexander Schnoor
 */
class Faq extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Question
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $question = '';

	/**
	 * Answer
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $answer = '';

	/**
	 * Additional search keywords
	 *
	 * @var string
	 */
	protected $keywords = '';

	/**
	 * Category
	 *
	 * @var \SKYFILLERS\SfSimpleFaq\Domain\Model\Category
	 */
	protected $category = NULL;

	/**
	 * Returns the question
	 *
	 * @return string $question
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * Sets the question
	 *
	 * @param string $question The question asked
	 *
	 * @return void
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}

	/**
	 * Returns the answer
	 *
	 * @return string $answer
	 */
	public function getAnswer() {
		return $this->answer;
	}

	/**
	 * Sets the answer
	 *
	 * @param string $answer The answer to the set question
	 *
	 * @return void
	 */
	public function setAnswer($answer) {
		$this->answer = $answer;
	}

	/**
	 * Returns the keywords
	 *
	 * @return string $keywords
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Sets the keywords
	 *
	 * @param string $keywords The keywords
	 *
	 * @return void
	 */
	public function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	/**
	 * Returns the category
	 *
	 * @return \SKYFILLERS\SfSimpleFaq\Domain\Model\Category $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param \SKYFILLERS\SfSimpleFaq\Domain\Model\Category $category A category
	 *
	 * @return void
	 */
	public function setCategory(\SKYFILLERS\SfSimpleFaq\Domain\Model\Category $category) {
		$this->category = $category;
	}

}