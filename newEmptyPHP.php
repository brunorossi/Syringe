<?php
return array(

    'Customers_Model_Mapper_Customer' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Mapper_Customer',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Customers_Model_Repository_Customer' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Repository_Customer',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Customers_Model_Mapper_Customer',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),        

    'Customers_Model_Mapper_CoworkerCareer' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Mapper_CoworkerCareer',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Customers_Model_Repository_CoworkerCareer' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Repository_CoworkerCareer',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Customers_Model_Mapper_CoworkerCareer',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                 
    
    'Customers_Model_Mapper_CoworkerSpecialization' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Mapper_CoworkerSpecialization',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                     
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Customers_Model_Repository_CoworkerSpecialization' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Repository_CoworkerSpecialization',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Customers_Model_Mapper_CoworkerSpecialization',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                     

    'Customers_Model_Mapper_CoworkerWillingToTravel' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Mapper_CoworkerWillingToTravel',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                     
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Customers_Model_Repository_CoworkerWillingToTravel' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Repository_CoworkerWillingToTravel',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Customers_Model_Mapper_CoworkerWillingToTravel',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),       
    
    'Customers_Model_Mapper_Status' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Mapper_Status',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                     
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Customers_Model_Repository_Status' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Repository_Status',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Customers_Model_Mapper_Status',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                  

    'Appealcourts_Model_Mapper_Court' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Appealcourts_Model_Mapper_Court',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                     new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                    
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Appealcourts_Model_Repository_Court' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Appealcourts_Model_Repository_Court',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Appealcourts_Model_Mapper_Court',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),           
    
    'Customers_Model_Mapper_AddressType' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Mapper_AddressType',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                     
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Customers_Model_Repository_AddressType' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Repository_AddressType',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Customers_Model_Mapper_Status',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),       

    'Geo_Model_Mapper_Country' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Geo_Model_Mapper_Country',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                     
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Geo_Model_Repository_Country' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Geo_Model_Repository_Country',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Geo_Model_Mapper_Country',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),    

    'Customers_Model_Mapper_Coworker' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Mapper_Coworker',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'dbAdapter',
                                            'value' => 'Zend_Db_Adapter_Pdo_Pgsql',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'identityCollectionSet',
                                            'value' => 'identityCollectionSet',
                                        )
                                    ),                                                     
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),                

    'Customers_Model_Repository_Coworker' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Model_Repository_Coworker',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'mapper',
                                            'value' => 'Customers_Model_Mapper_Coworker',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                )
            ),
        )
    ),    

    'coworkerTemporaryAddressSubForm' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Form_Address',
            'shared' => false,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'geoCountryRepository',
                                            'value' => 'Geo_Model_Repository_Country',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                                

                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'elementsBelongTo',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'belongsTo',
                                            'value' => 'Customers_Model_Entity_Coworker[Customers_Model_Entity_Customer][Customers_Model_Collection_Address][0][Customers_Model_Value_Address]',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),  

                    new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'populate',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Array(
                                            array(
                                            'name' => 'values',
                                            'value' => array('addressType' => 1, 'primary' => 0, 'country' => null),
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                                 

                )
            ),
        )
    ),      

    'coworkerPermanentAddressSubForm' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Form_Address',
            'shared' => false,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'geoCountryRepository',
                                            'value' => 'Geo_Model_Repository_Country',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                                
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'elementsBelongTo',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'belongsTo',
                                            'value' => 'Customers_Model_Entity_Coworker[Customers_Model_Entity_Customer][Customers_Model_Collection_Address][1][Customers_Model_Value_Address]',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),  
                    new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'populate',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Array(
                                            array(
                                            'name' => 'values',
                                            'value' => array('addressType' => 1, 'primary' => 0, 'country' => null),
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                                         

                )
            ),                    
        )
    ), 

    'coworkerInvoiceAddressSubForm' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Form_Address',
            'shared' => false,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(

                    new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'geoCountryRepository',
                                            'value' => 'Geo_Model_Repository_Country',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                 
                    
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'elementsBelongTo',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'belongsTo',
                                            'value' => 'Customers_Model_Entity_Coworker[Customers_Model_Entity_Customer][Customers_Model_Collection_Address][2][Customers_Model_Value_Address]',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),  

                    new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'populate',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Array(
                                            array(
                                            'name' => 'values',
                                            'value' => array('addressType' => 1, 'primary' => 0, 'country' => null),
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),     

                )
            ),                    
        )
    ), 
    
    'coworkerContactSubForm' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Form_Contact',
            'shared' => false,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'elementsBelongTo',
                            'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'belongsTo',
                                            'value' => 'Customers_Model_Entity_Coworker[Customers_Model_Entity_Customer][Customers_Model_Value_Contact]',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),  
                )
            ),
        )
    ),                     
    
    'coworkerCustomerSubForm' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Form_Customer',
            'shared' => false,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'elementsBelongTo',
                            'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'belongsTo',
                                            'value' => 'Customers_Model_Entity_Coworker[Customers_Model_Entity_Customer]',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                                 	

                    new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'addSubForm',
                            'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'subFormClass',
                                            'value' => 'coworkerTemporaryAddressSubForm',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'subFormName',
                                            'value' => 'temporaryAddressSubForm',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                                    

                    new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'addSubForm',
                            'static' => false,                             
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'subFormClass',
                                            'value' => 'coworkerPermanentAddressSubForm',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'subFormName',
                                            'value' => 'permanentAddressSubForm',
                                        )
                                    ),                                                 
                                )
                            ),
                        )                                
                    ),

                    new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'addSubForm',
                            'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'subFormClass',
                                            'value' => 'coworkerInvoiceAddressSubForm',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'subFormName',
                                            'value' => 'invoiceAddressSubForm',
                                        )
                                    ),                                                
                                )
                            ),
                        )                                
                    ),

                    new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'addSubForm',
                            'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'subFormClass',
                                            'value' => 'coworkerContactSubForm',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'subFormName',
                                            'value' => 'contactSubForm',
                                        )
                                    ),                                            
                                )
                            ),
                        )                                
                    ),                                         

                )
            ),                  
        )
    ),                    

    'coworkerForm' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Form_Coworker',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(

                    /*
                            new Syringe_Meta_Injector_UnifiedConstructor(
                        array(
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'coworkerCareerRepository',
                                            'value' => 'Customers_Model_Repository_CoworkerCareer',
                                        )
                                    ),           
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'coworkerSpecializationRepository',
                                            'value' => 'Customers_Model_Repository_CoworkerSpecialization',
                                        )
                                    ),         
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'coworkerWillingToTravelRepository',
                                            'value' => 'Customers_Model_Repository_CoworkerWillingToTravel',
                                        )
                                    ),      
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'appealcourtRepository',
                                            'value' => 'Appealcourts_Model_Repository_Court',
                                        )
                                    ),      
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'addSubForm',
                                            'value' => 'coworkerCustomerSubForm',
                                        )
                                    ),                                                                                                                                                                       
                                )
                            ),
                        )
                    ),                                  
                    */	

                            new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'elementsBelongTo',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'belongsTo',
                                            'value' => 'Customers_Model_Entity_Coworker',
                                        )
                                    ),                                           
                                )
                            ),
                        )
                    ),                                 

                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'method',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'method',
                                            'value' => 'POST',
                                        )
                                    ),                                           
                                )
                            ),
                        )
                    ), 

                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'action',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'action',
                                            'value' => '/customers/coworker/save',
                                        )
                                    ),                                           
                                )
                            ),
                        )
                    ),                                  


                            new Syringe_Meta_Injector_Method(
                        array(
                            'methodName' => 'addSubForm',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                            'name' => 'subFormClass',
                                            'value' => 'coworkerCustomerSubForm',
                                        )
                                    ),
                                    new Syringe_Meta_Injector_Argument_String(
                                            array(
                                            'name' => 'subFormName',
                                            'value' => 'customerSubForm',
                                        )
                                    ),                                                
                                )
                            ),
                        )
                    ),                            







                )
            ),                    
        )
    ),              		

    'Customers_Service_Coworker' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Service_Coworker',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'coworkerRepository',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'coworkerRepository',
                                            'value' => 'Customers_Model_Repository_Coworker',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'coworkerForm',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'coworkerForm',
                                            'value' => 'coworkerForm',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),                                
                )
            ),
        )
    ),        
    
    'customerLoginForm' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Form_Login',
            'shared' => true,
        )
    ),    

    'Customers_Service_Auth' => new Syringe_Meta_Builder_Class(
        array(
            'className' => 'Customers_Service_Auth',
            'shared' => true,
            'injectors' => new Syringe_Meta_Injector_Collection(
                array(
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'storage',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'storage',
                                            'value' => 'customerAuthStorage',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),   
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'customerLoginForm',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'form',
                                            'value' => 'customerLoginForm',
                                        )
                                    ),
                                )
                            ),
                        )
                    ), 
                    new Syringe_Meta_Injector_Setter(
                        array(
                            'methodName' => 'customerRepository',
                                    'static' => false,
                            'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                array(
                                    new Syringe_Meta_Injector_Argument_Reference(
                                        array(
                                            'name' => 'customerRepository',
                                            'value' => 'Customers_Model_Repository_Customer',
                                        )
                                    ),
                                )
                            ),
                        )
                    ),                           
                )
            ),
        )
    ),  
                
);  	