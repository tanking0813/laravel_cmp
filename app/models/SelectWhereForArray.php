<?php

	Class SelectWhereForArray extends Eloquent{

		protected $query;

		protected $where =array(); 

		public function __construct(Array $where,Modle $query){

			$this->where = $where;	
			$this->query = $query;
		
		}
		public function builderWhere(){
			
			
		}

	}
