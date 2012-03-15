<?php

namespace System\Include;

class UserStaff extends \System\Include\Collection {

	public function setData( $raw_data ) {
		$this->data = $raw_data->data;
		$this->pagination = isset( $raw_data->pagination ) ? $raw_data->pagination : null;
		$this->convertData( '\Library\User' );
	}

	public function getNextCursor() {
		return isset( $this->pagination->next_cursor ) && !empty( $this->pagination->next_cursor ) ? $this->pagination->next_cursor : null;
	}

	public function getNext() {
		return $this->getNextCursor();
	}

}