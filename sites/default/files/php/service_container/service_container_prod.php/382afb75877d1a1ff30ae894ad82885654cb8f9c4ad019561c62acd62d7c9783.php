<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * service_container_prod
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class service_container_prod extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'access_check.cron' => 'getAccessCheck_CronService',
            'access_check.default' => 'getAccessCheck_DefaultService',
            'access_check.edit.entity' => 'getAccessCheck_Edit_EntityService',
            'access_check.edit.entity_field' => 'getAccessCheck_Edit_EntityFieldService',
            'access_check.entity' => 'getAccessCheck_EntityService',
            'access_check.entity_create' => 'getAccessCheck_EntityCreateService',
            'access_check.field_ui.form_mode' => 'getAccessCheck_FieldUi_FormModeService',
            'access_check.field_ui.view_mode' => 'getAccessCheck_FieldUi_ViewModeService',
            'access_check.filter_disable' => 'getAccessCheck_FilterDisableService',
            'access_check.node.revision' => 'getAccessCheck_Node_RevisionService',
            'access_check.overlay.dismiss_message' => 'getAccessCheck_Overlay_DismissMessageService',
            'access_check.permission' => 'getAccessCheck_PermissionService',
            'access_check.shortcut.link' => 'getAccessCheck_Shortcut_LinkService',
            'access_check.taxonomy_term.create' => 'getAccessCheck_TaxonomyTerm_CreateService',
            'access_check.toolbar_subtree' => 'getAccessCheck_ToolbarSubtreeService',
            'access_check.user.login_status' => 'getAccessCheck_User_LoginStatusService',
            'access_check.user.register' => 'getAccessCheck_User_RegisterService',
            'access_check.user.role' => 'getAccessCheck_User_RoleService',
            'access_manager' => 'getAccessManagerService',
            'access_subscriber' => 'getAccessSubscriberService',
            'ajax.subscriber' => 'getAjax_SubscriberService',
            'asset.css.collection_grouper' => 'getAsset_Css_CollectionGrouperService',
            'asset.css.collection_optimizer' => 'getAsset_Css_CollectionOptimizerService',
            'asset.css.collection_renderer' => 'getAsset_Css_CollectionRendererService',
            'asset.css.dumper' => 'getAsset_Css_DumperService',
            'asset.css.optimizer' => 'getAsset_Css_OptimizerService',
            'asset.js.collection_grouper' => 'getAsset_Js_CollectionGrouperService',
            'asset.js.collection_optimizer' => 'getAsset_Js_CollectionOptimizerService',
            'asset.js.collection_renderer' => 'getAsset_Js_CollectionRendererService',
            'asset.js.dumper' => 'getAsset_Js_DumperService',
            'asset.js.optimizer' => 'getAsset_Js_OptimizerService',
            'authentication' => 'getAuthenticationService',
            'authentication.cookie' => 'getAuthentication_CookieService',
            'authentication.http_basic' => 'getAuthentication_HttpBasicService',
            'authentication_subscriber' => 'getAuthenticationSubscriberService',
            'batch.storage' => 'getBatch_StorageService',
            'block.route_subscriber' => 'getBlock_RouteSubscriberService',
            'block.theme_access_check' => 'getBlock_ThemeAccessCheckService',
            'breadcrumb' => 'getBreadcrumbService',
            'cache.backend.database' => 'getCache_Backend_DatabaseService',
            'cache.backend.memory' => 'getCache_Backend_MemoryService',
            'cache.block' => 'getCache_BlockService',
            'cache.bootstrap' => 'getCache_BootstrapService',
            'cache.cache' => 'getCache_CacheService',
            'cache.ckeditor.languages' => 'getCache_Ckeditor_LanguagesService',
            'cache.config' => 'getCache_ConfigService',
            'cache.entity' => 'getCache_EntityService',
            'cache.field' => 'getCache_FieldService',
            'cache.filter' => 'getCache_FilterService',
            'cache.menu' => 'getCache_MenuService',
            'cache.page' => 'getCache_PageService',
            'cache.path' => 'getCache_PathService',
            'cache.toolbar' => 'getCache_ToolbarService',
            'cache.views_info' => 'getCache_ViewsInfoService',
            'cache.views_results' => 'getCache_ViewsResultsService',
            'cache_factory' => 'getCacheFactoryService',
            'class_loader' => 'getClassLoaderService',
            'config.cachedstorage.storage' => 'getConfig_Cachedstorage_StorageService',
            'config.context' => 'getConfig_ContextService',
            'config.context.factory' => 'getConfig_Context_FactoryService',
            'config.context.free' => 'getConfig_Context_FreeService',
            'config.factory' => 'getConfig_FactoryService',
            'config.storage' => 'getConfig_StorageService',
            'config.storage.installer' => 'getConfig_Storage_InstallerService',
            'config.storage.schema' => 'getConfig_Storage_SchemaService',
            'config.storage.snapshot' => 'getConfig_Storage_SnapshotService',
            'config.storage.staging' => 'getConfig_Storage_StagingService',
            'config.typed' => 'getConfig_TypedService',
            'config_global_override_subscriber' => 'getConfigGlobalOverrideSubscriberService',
            'config_import_subscriber' => 'getConfigImportSubscriberService',
            'config_snapshot_subscriber' => 'getConfigSnapshotSubscriberService',
            'container.namespaces' => 'getContainer_NamespacesService',
            'content_negotiation' => 'getContentNegotiationService',
            'controller.dialog' => 'getController_DialogService',
            'controller.page' => 'getController_PageService',
            'controller_resolver' => 'getControllerResolverService',
            'country_manager' => 'getCountryManagerService',
            'csrf_token' => 'getCsrfTokenService',
            'current_user' => 'getCurrentUserService',
            'database' => 'getDatabaseService',
            'database.slave' => 'getDatabase_SlaveService',
            'date' => 'getDateService',
            'edit.editor.selector' => 'getEdit_Editor_SelectorService',
            'edit.metadata.generator' => 'getEdit_Metadata_GeneratorService',
            'entity.manager' => 'getEntity_ManagerService',
            'entity.query' => 'getEntity_QueryService',
            'entity.query.config' => 'getEntity_Query_ConfigService',
            'entity.query.sql' => 'getEntity_Query_SqlService',
            'event_dispatcher' => 'getEventDispatcherService',
            'exception_controller' => 'getExceptionControllerService',
            'exception_listener' => 'getExceptionListenerService',
            'feed.bridge.reader' => 'getFeed_Bridge_ReaderService',
            'feed.bridge.writer' => 'getFeed_Bridge_WriterService',
            'feed.reader.atomentry' => 'getFeed_Reader_AtomentryService',
            'feed.reader.atomfeed' => 'getFeed_Reader_AtomfeedService',
            'feed.reader.contententry' => 'getFeed_Reader_ContententryService',
            'feed.reader.dublincoreentry' => 'getFeed_Reader_DublincoreentryService',
            'feed.reader.dublincorefeed' => 'getFeed_Reader_DublincorefeedService',
            'feed.reader.podcastentry' => 'getFeed_Reader_PodcastentryService',
            'feed.reader.podcastfeed' => 'getFeed_Reader_PodcastfeedService',
            'feed.reader.slashentry' => 'getFeed_Reader_SlashentryService',
            'feed.reader.threadentry' => 'getFeed_Reader_ThreadentryService',
            'feed.reader.wellformedwebentry' => 'getFeed_Reader_WellformedwebentryService',
            'feed.writer.atomrendererfeed' => 'getFeed_Writer_AtomrendererfeedService',
            'feed.writer.contentrendererentry' => 'getFeed_Writer_ContentrendererentryService',
            'feed.writer.dublincorerendererentry' => 'getFeed_Writer_DublincorerendererentryService',
            'feed.writer.dublincorerendererfeed' => 'getFeed_Writer_DublincorerendererfeedService',
            'feed.writer.itunesentry' => 'getFeed_Writer_ItunesentryService',
            'feed.writer.itunesfeed' => 'getFeed_Writer_ItunesfeedService',
            'feed.writer.itunesrendererentry' => 'getFeed_Writer_ItunesrendererentryService',
            'feed.writer.itunesrendererfeed' => 'getFeed_Writer_ItunesrendererfeedService',
            'feed.writer.slashrendererentry' => 'getFeed_Writer_SlashrendererentryService',
            'feed.writer.threadingrendererentry' => 'getFeed_Writer_ThreadingrendererentryService',
            'feed.writer.wellformedwebrendererentry' => 'getFeed_Writer_WellformedwebrendererentryService',
            'field.info' => 'getField_InfoService',
            'field_ui.subscriber' => 'getFieldUi_SubscriberService',
            'file.usage' => 'getFile_UsageService',
            'finish_response_subscriber' => 'getFinishResponseSubscriberService',
            'flood' => 'getFloodService',
            'http_client_simpletest_subscriber' => 'getHttpClientSimpletestSubscriberService',
            'http_default_client' => 'getHttpDefaultClientService',
            'http_kernel' => 'getHttpKernelService',
            'image.factory' => 'getImage_FactoryService',
            'image.route_subscriber' => 'getImage_RouteSubscriberService',
            'image.toolkit' => 'getImage_ToolkitService',
            'image.toolkit.manager' => 'getImage_Toolkit_ManagerService',
            'kernel' => 'getKernelService',
            'kernel_destruct_subscriber' => 'getKernelDestructSubscriberService',
            'keyvalue' => 'getKeyvalueService',
            'keyvalue.database' => 'getKeyvalue_DatabaseService',
            'keyvalue.expirable' => 'getKeyvalue_ExpirableService',
            'keyvalue.expirable.database' => 'getKeyvalue_Expirable_DatabaseService',
            'language_manager' => 'getLanguageManagerService',
            'language_request_subscriber' => 'getLanguageRequestSubscriberService',
            'legacy_access_subscriber' => 'getLegacyAccessSubscriberService',
            'legacy_controller_subscriber' => 'getLegacyControllerSubscriberService',
            'legacy_generator' => 'getLegacyGeneratorService',
            'legacy_request_subscriber' => 'getLegacyRequestSubscriberService',
            'legacy_router' => 'getLegacyRouterService',
            'legacy_url_matcher' => 'getLegacyUrlMatcherService',
            'link_generator' => 'getLinkGeneratorService',
            'lock' => 'getLockService',
            'mail.factory' => 'getMail_FactoryService',
            'maintenance_mode_subscriber' => 'getMaintenanceModeSubscriberService',
            'menu_link.breadcrumb' => 'getMenuLink_BreadcrumbService',
            'mime_type_matcher' => 'getMimeTypeMatcherService',
            'module_handler' => 'getModuleHandlerService',
            'node.grant_storage' => 'getNode_GrantStorageService',
            'overlay.subscriber' => 'getOverlay_SubscriberService',
            'paramconverter.entity' => 'getParamconverter_EntityService',
            'paramconverter.views_ui' => 'getParamconverter_ViewsUiService',
            'paramconverter_manager' => 'getParamconverterManagerService',
            'paramconverter_subscriber' => 'getParamconverterSubscriberService',
            'password' => 'getPasswordService',
            'path.alias_manager' => 'getPath_AliasManagerService',
            'path.alias_manager.cached' => 'getPath_AliasManager_CachedService',
            'path.alias_whitelist' => 'getPath_AliasWhitelistService',
            'path.crud' => 'getPath_CrudService',
            'path_processor.files' => 'getPathProcessor_FilesService',
            'path_processor.image_styles' => 'getPathProcessor_ImageStylesService',
            'path_processor_alias' => 'getPathProcessorAliasService',
            'path_processor_decode' => 'getPathProcessorDecodeService',
            'path_processor_front' => 'getPathProcessorFrontService',
            'path_processor_manager' => 'getPathProcessorManagerService',
            'path_subscriber' => 'getPathSubscriberService',
            'plugin.manager.action' => 'getPlugin_Manager_ActionService',
            'plugin.manager.archiver' => 'getPlugin_Manager_ArchiverService',
            'plugin.manager.block' => 'getPlugin_Manager_BlockService',
            'plugin.manager.ckeditor.plugin' => 'getPlugin_Manager_Ckeditor_PluginService',
            'plugin.manager.condition' => 'getPlugin_Manager_ConditionService',
            'plugin.manager.edit.editor' => 'getPlugin_Manager_Edit_EditorService',
            'plugin.manager.editor' => 'getPlugin_Manager_EditorService',
            'plugin.manager.entity.field.field_type' => 'getPlugin_Manager_Entity_Field_FieldTypeService',
            'plugin.manager.field.formatter' => 'getPlugin_Manager_Field_FormatterService',
            'plugin.manager.field.widget' => 'getPlugin_Manager_Field_WidgetService',
            'plugin.manager.filter' => 'getPlugin_Manager_FilterService',
            'plugin.manager.image.effect' => 'getPlugin_Manager_Image_EffectService',
            'plugin.manager.menu.local_action' => 'getPlugin_Manager_Menu_LocalActionService',
            'plugin.manager.menu.local_task' => 'getPlugin_Manager_Menu_LocalTaskService',
            'plugin.manager.views.access' => 'getPlugin_Manager_Views_AccessService',
            'plugin.manager.views.area' => 'getPlugin_Manager_Views_AreaService',
            'plugin.manager.views.argument' => 'getPlugin_Manager_Views_ArgumentService',
            'plugin.manager.views.argument_default' => 'getPlugin_Manager_Views_ArgumentDefaultService',
            'plugin.manager.views.argument_validator' => 'getPlugin_Manager_Views_ArgumentValidatorService',
            'plugin.manager.views.cache' => 'getPlugin_Manager_Views_CacheService',
            'plugin.manager.views.display' => 'getPlugin_Manager_Views_DisplayService',
            'plugin.manager.views.display_extender' => 'getPlugin_Manager_Views_DisplayExtenderService',
            'plugin.manager.views.exposed_form' => 'getPlugin_Manager_Views_ExposedFormService',
            'plugin.manager.views.field' => 'getPlugin_Manager_Views_FieldService',
            'plugin.manager.views.filter' => 'getPlugin_Manager_Views_FilterService',
            'plugin.manager.views.join' => 'getPlugin_Manager_Views_JoinService',
            'plugin.manager.views.pager' => 'getPlugin_Manager_Views_PagerService',
            'plugin.manager.views.query' => 'getPlugin_Manager_Views_QueryService',
            'plugin.manager.views.relationship' => 'getPlugin_Manager_Views_RelationshipService',
            'plugin.manager.views.row' => 'getPlugin_Manager_Views_RowService',
            'plugin.manager.views.sort' => 'getPlugin_Manager_Views_SortService',
            'plugin.manager.views.style' => 'getPlugin_Manager_Views_StyleService',
            'plugin.manager.views.wizard' => 'getPlugin_Manager_Views_WizardService',
            'private_key' => 'getPrivateKeyService',
            'queue' => 'getQueueService',
            'queue.database' => 'getQueue_DatabaseService',
            'redirect_response_subscriber' => 'getRedirectResponseSubscriberService',
            'request' => 'getRequestService',
            'request_close_subscriber' => 'getRequestCloseSubscriberService',
            'reverse_proxy_subscriber' => 'getReverseProxySubscriberService',
            'route_enhancer.ajax' => 'getRouteEnhancer_AjaxService',
            'route_enhancer.authentication' => 'getRouteEnhancer_AuthenticationService',
            'route_enhancer.content_controller' => 'getRouteEnhancer_ContentControllerService',
            'route_enhancer.entity' => 'getRouteEnhancer_EntityService',
            'route_enhancer.form' => 'getRouteEnhancer_FormService',
            'route_special_attributes_subscriber' => 'getRouteSpecialAttributesSubscriberService',
            'route_subscriber.entity' => 'getRouteSubscriber_EntityService',
            'router' => 'getRouterService',
            'router.builder' => 'getRouter_BuilderService',
            'router.dumper' => 'getRouter_DumperService',
            'router.dynamic' => 'getRouter_DynamicService',
            'router.matcher' => 'getRouter_MatcherService',
            'router.matcher.final_matcher' => 'getRouter_Matcher_FinalMatcherService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router.route_provider' => 'getRouter_RouteProviderService',
            'router_listener' => 'getRouterListenerService',
            'service_container' => 'getServiceContainerService',
            'settings' => 'getSettingsService',
            'slave_database_ignore__subscriber' => 'getSlaveDatabaseIgnoreSubscriberService',
            'state' => 'getStateService',
            'string_translation' => 'getStringTranslationService',
            'string_translator.custom_strings' => 'getStringTranslator_CustomStringsService',
            'system.breadcrumb.legacy' => 'getSystem_Breadcrumb_LegacyService',
            'system.manager' => 'getSystem_ManagerService',
            'system.route_subscriber' => 'getSystem_RouteSubscriberService',
            'token' => 'getTokenService',
            'transliteration' => 'getTransliterationService',
            'twig' => 'getTwigService',
            'twig.loader.filesystem' => 'getTwig_Loader_FilesystemService',
            'typed_data' => 'getTypedDataService',
            'url_generator' => 'getUrlGeneratorService',
            'user.autocomplete' => 'getUser_AutocompleteService',
            'user.data' => 'getUser_DataService',
            'user.tempstore' => 'getUser_TempstoreService',
            'user_maintenance_mode_subscriber' => 'getUserMaintenanceModeSubscriberService',
            'validation.constraint' => 'getValidation_ConstraintService',
            'view_subscriber' => 'getViewSubscriberService',
            'views.analyzer' => 'getViews_AnalyzerService',
            'views.executable' => 'getViews_ExecutableService',
            'views.route_access_check' => 'getViews_RouteAccessCheckService',
            'views.route_subscriber' => 'getViews_RouteSubscriberService',
            'views.views_data' => 'getViews_ViewsDataService',
            'views.views_data_helper' => 'getViews_ViewsDataHelperService',
        );
        $this->aliases = array(
            'plugin.manager.entity' => 'entity.manager',
            'twig.loader' => 'twig.loader.filesystem',
        );
    }

    /**
     * Gets the 'access_check.cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\Access\CronAccessCheck A Drupal\system\Access\CronAccessCheck instance.
     */
    protected function getAccessCheck_CronService()
    {
        return $this->services['access_check.cron'] = new \Drupal\system\Access\CronAccessCheck();
    }

    /**
     * Gets the 'access_check.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\DefaultAccessCheck A Drupal\Core\Access\DefaultAccessCheck instance.
     */
    protected function getAccessCheck_DefaultService()
    {
        return $this->services['access_check.default'] = new \Drupal\Core\Access\DefaultAccessCheck();
    }

    /**
     * Gets the 'access_check.edit.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\edit\Access\EditEntityAccessCheck A Drupal\edit\Access\EditEntityAccessCheck instance.
     */
    protected function getAccessCheck_Edit_EntityService()
    {
        return $this->services['access_check.edit.entity'] = new \Drupal\edit\Access\EditEntityAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.edit.entity_field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\edit\Access\EditEntityFieldAccessCheck A Drupal\edit\Access\EditEntityFieldAccessCheck instance.
     */
    protected function getAccessCheck_Edit_EntityFieldService()
    {
        return $this->services['access_check.edit.entity_field'] = new \Drupal\edit\Access\EditEntityFieldAccessCheck($this->get('entity.manager'), $this->get('field.info'));
    }

    /**
     * Gets the 'access_check.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityAccessCheck A Drupal\Core\Entity\EntityAccessCheck instance.
     */
    protected function getAccessCheck_EntityService()
    {
        return $this->services['access_check.entity'] = new \Drupal\Core\Entity\EntityAccessCheck();
    }

    /**
     * Gets the 'access_check.entity_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityCreateAccessCheck A Drupal\Core\Entity\EntityCreateAccessCheck instance.
     */
    protected function getAccessCheck_EntityCreateService()
    {
        return $this->services['access_check.entity_create'] = new \Drupal\Core\Entity\EntityCreateAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.field_ui.form_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field_ui\Access\FormModeAccessCheck A Drupal\field_ui\Access\FormModeAccessCheck instance.
     */
    protected function getAccessCheck_FieldUi_FormModeService()
    {
        return $this->services['access_check.field_ui.form_mode'] = new \Drupal\field_ui\Access\FormModeAccessCheck();
    }

    /**
     * Gets the 'access_check.field_ui.view_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field_ui\Access\ViewModeAccessCheck A Drupal\field_ui\Access\ViewModeAccessCheck instance.
     */
    protected function getAccessCheck_FieldUi_ViewModeService()
    {
        return $this->services['access_check.field_ui.view_mode'] = new \Drupal\field_ui\Access\ViewModeAccessCheck();
    }

    /**
     * Gets the 'access_check.filter_disable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\filter\Access\FormatDisableCheck A Drupal\filter\Access\FormatDisableCheck instance.
     */
    protected function getAccessCheck_FilterDisableService()
    {
        return $this->services['access_check.filter_disable'] = new \Drupal\filter\Access\FormatDisableCheck();
    }

    /**
     * Gets the 'access_check.node.revision' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\node\Access\NodeRevisionAccessCheck A Drupal\node\Access\NodeRevisionAccessCheck instance.
     */
    protected function getAccessCheck_Node_RevisionService()
    {
        return $this->services['access_check.node.revision'] = new \Drupal\node\Access\NodeRevisionAccessCheck($this->get('entity.manager'), $this->get('database'));
    }

    /**
     * Gets the 'access_check.overlay.dismiss_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\overlay\Access\DismissMessageAccessCheck A Drupal\overlay\Access\DismissMessageAccessCheck instance.
     */
    protected function getAccessCheck_Overlay_DismissMessageService()
    {
        return $this->services['access_check.overlay.dismiss_message'] = new \Drupal\overlay\Access\DismissMessageAccessCheck();
    }

    /**
     * Gets the 'access_check.permission' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\PermissionAccessCheck A Drupal\user\Access\PermissionAccessCheck instance.
     */
    protected function getAccessCheck_PermissionService()
    {
        return $this->services['access_check.permission'] = new \Drupal\user\Access\PermissionAccessCheck();
    }

    /**
     * Gets the 'access_check.shortcut.link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\shortcut\Access\LinkDeleteAccessCheck A Drupal\shortcut\Access\LinkDeleteAccessCheck instance.
     */
    protected function getAccessCheck_Shortcut_LinkService()
    {
        return $this->services['access_check.shortcut.link'] = new \Drupal\shortcut\Access\LinkDeleteAccessCheck();
    }

    /**
     * Gets the 'access_check.taxonomy_term.create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\taxonomy\Access\TaxonomyTermCreateAccess A Drupal\taxonomy\Access\TaxonomyTermCreateAccess instance.
     */
    protected function getAccessCheck_TaxonomyTerm_CreateService()
    {
        return $this->services['access_check.taxonomy_term.create'] = new \Drupal\taxonomy\Access\TaxonomyTermCreateAccess($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.toolbar_subtree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\toolbar\Access\SubtreeAccess A Drupal\toolbar\Access\SubtreeAccess instance.
     */
    protected function getAccessCheck_ToolbarSubtreeService()
    {
        return $this->services['access_check.toolbar_subtree'] = new \Drupal\toolbar\Access\SubtreeAccess();
    }

    /**
     * Gets the 'access_check.user.login_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\LoginStatusCheck A Drupal\user\Access\LoginStatusCheck instance.
     */
    protected function getAccessCheck_User_LoginStatusService()
    {
        return $this->services['access_check.user.login_status'] = new \Drupal\user\Access\LoginStatusCheck();
    }

    /**
     * Gets the 'access_check.user.register' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\RegisterAccessCheck A Drupal\user\Access\RegisterAccessCheck instance.
     */
    protected function getAccessCheck_User_RegisterService()
    {
        return $this->services['access_check.user.register'] = new \Drupal\user\Access\RegisterAccessCheck();
    }

    /**
     * Gets the 'access_check.user.role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\Access\RoleAccessCheck A Drupal\user\Access\RoleAccessCheck instance.
     */
    protected function getAccessCheck_User_RoleService()
    {
        return $this->services['access_check.user.role'] = new \Drupal\user\Access\RoleAccessCheck();
    }

    /**
     * Gets the 'access_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\AccessManager A Drupal\Core\Access\AccessManager instance.
     */
    protected function getAccessManagerService()
    {
        $this->services['access_manager'] = $instance = new \Drupal\Core\Access\AccessManager($this->get('router.route_provider'), $this->get('url_generator'), $this->get('paramconverter_manager'));

        $instance->setContainer($this);
        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        $instance->addCheckService('access_check.default');
        $instance->addCheckService('access_check.entity');
        $instance->addCheckService('access_check.entity_create');
        $instance->addCheckService('block.theme_access_check');
        $instance->addCheckService('access_check.edit.entity_field');
        $instance->addCheckService('access_check.edit.entity');
        $instance->addCheckService('access_check.field_ui.view_mode');
        $instance->addCheckService('access_check.field_ui.form_mode');
        $instance->addCheckService('access_check.filter_disable');
        $instance->addCheckService('access_check.node.revision');
        $instance->addCheckService('access_check.overlay.dismiss_message');
        $instance->addCheckService('access_check.shortcut.link');
        $instance->addCheckService('access_check.cron');
        $instance->addCheckService('access_check.taxonomy_term.create');
        $instance->addCheckService('access_check.toolbar_subtree');
        $instance->addCheckService('access_check.permission');
        $instance->addCheckService('access_check.user.register');
        $instance->addCheckService('access_check.user.role');
        $instance->addCheckService('access_check.user.login_status');
        $instance->addCheckService('views.route_access_check');

        return $instance;
    }

    /**
     * Gets the 'access_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AccessSubscriber A Drupal\Core\EventSubscriber\AccessSubscriber instance.
     */
    protected function getAccessSubscriberService()
    {
        return $this->services['access_subscriber'] = new \Drupal\Core\EventSubscriber\AccessSubscriber($this->get('access_manager'));
    }

    /**
     * Gets the 'ajax.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Ajax\AjaxSubscriber A Drupal\Core\Ajax\AjaxSubscriber instance.
     */
    protected function getAjax_SubscriberService()
    {
        return $this->services['ajax.subscriber'] = new \Drupal\Core\Ajax\AjaxSubscriber();
    }

    /**
     * Gets the 'asset.css.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionGrouper A Drupal\Core\Asset\CssCollectionGrouper instance.
     */
    protected function getAsset_Css_CollectionGrouperService()
    {
        return $this->services['asset.css.collection_grouper'] = new \Drupal\Core\Asset\CssCollectionGrouper();
    }

    /**
     * Gets the 'asset.css.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionOptimizer A Drupal\Core\Asset\CssCollectionOptimizer instance.
     */
    protected function getAsset_Css_CollectionOptimizerService()
    {
        return $this->services['asset.css.collection_optimizer'] = new \Drupal\Core\Asset\CssCollectionOptimizer($this->get('asset.css.collection_grouper'), $this->get('asset.css.optimizer'), $this->get('asset.css.dumper'), $this->get('state'));
    }

    /**
     * Gets the 'asset.css.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionRenderer A Drupal\Core\Asset\CssCollectionRenderer instance.
     */
    protected function getAsset_Css_CollectionRendererService()
    {
        return $this->services['asset.css.collection_renderer'] = new \Drupal\Core\Asset\CssCollectionRenderer();
    }

    /**
     * Gets the 'asset.css.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Css_DumperService()
    {
        return $this->services['asset.css.dumper'] = new \Drupal\Core\Asset\AssetDumper();
    }

    /**
     * Gets the 'asset.css.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssOptimizer A Drupal\Core\Asset\CssOptimizer instance.
     */
    protected function getAsset_Css_OptimizerService()
    {
        return $this->services['asset.css.optimizer'] = new \Drupal\Core\Asset\CssOptimizer();
    }

    /**
     * Gets the 'asset.js.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionGrouper A Drupal\Core\Asset\JsCollectionGrouper instance.
     */
    protected function getAsset_Js_CollectionGrouperService()
    {
        return $this->services['asset.js.collection_grouper'] = new \Drupal\Core\Asset\JsCollectionGrouper();
    }

    /**
     * Gets the 'asset.js.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionOptimizer A Drupal\Core\Asset\JsCollectionOptimizer instance.
     */
    protected function getAsset_Js_CollectionOptimizerService()
    {
        return $this->services['asset.js.collection_optimizer'] = new \Drupal\Core\Asset\JsCollectionOptimizer($this->get('asset.js.collection_grouper'), $this->get('asset.js.optimizer'), $this->get('asset.js.dumper'), $this->get('state'));
    }

    /**
     * Gets the 'asset.js.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionRenderer A Drupal\Core\Asset\JsCollectionRenderer instance.
     */
    protected function getAsset_Js_CollectionRendererService()
    {
        return $this->services['asset.js.collection_renderer'] = new \Drupal\Core\Asset\JsCollectionRenderer();
    }

    /**
     * Gets the 'asset.js.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Js_DumperService()
    {
        return $this->services['asset.js.dumper'] = new \Drupal\Core\Asset\AssetDumper();
    }

    /**
     * Gets the 'asset.js.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsOptimizer A Drupal\Core\Asset\JsOptimizer instance.
     */
    protected function getAsset_Js_OptimizerService()
    {
        return $this->services['asset.js.optimizer'] = new \Drupal\Core\Asset\JsOptimizer();
    }

    /**
     * Gets the 'authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Authentication\AuthenticationManager A Drupal\Core\Authentication\AuthenticationManager instance.
     */
    protected function getAuthenticationService()
    {
        $this->services['authentication'] = $instance = new \Drupal\Core\Authentication\AuthenticationManager();

        $instance->addProvider('authentication.cookie', $this->get('authentication.cookie'), 0);
        $instance->addProvider('authentication.http_basic', $this->get('authentication.http_basic'), 100);

        return $instance;
    }

    /**
     * Gets the 'authentication.cookie' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Authentication\Provider\Cookie A Drupal\Core\Authentication\Provider\Cookie instance.
     */
    protected function getAuthentication_CookieService()
    {
        return $this->services['authentication.cookie'] = new \Drupal\Core\Authentication\Provider\Cookie();
    }

    /**
     * Gets the 'authentication.http_basic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Authentication\Provider\HttpBasic A Drupal\Core\Authentication\Provider\HttpBasic instance.
     */
    protected function getAuthentication_HttpBasicService()
    {
        return $this->services['authentication.http_basic'] = new \Drupal\Core\Authentication\Provider\HttpBasic($this->get('config.factory'));
    }

    /**
     * Gets the 'authentication_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AuthenticationSubscriber A Drupal\Core\EventSubscriber\AuthenticationSubscriber instance.
     */
    protected function getAuthenticationSubscriberService()
    {
        return $this->services['authentication_subscriber'] = new \Drupal\Core\EventSubscriber\AuthenticationSubscriber($this->get('authentication'));
    }

    /**
     * Gets the 'batch.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Batch\BatchStorage A Drupal\Core\Batch\BatchStorage instance.
     */
    protected function getBatch_StorageService()
    {
        return $this->services['batch.storage'] = new \Drupal\Core\Batch\BatchStorage($this->get('database'));
    }

    /**
     * Gets the 'block.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\block\Routing\RouteSubscriber A Drupal\block\Routing\RouteSubscriber instance.
     */
    protected function getBlock_RouteSubscriberService()
    {
        return $this->services['block.route_subscriber'] = new \Drupal\block\Routing\RouteSubscriber();
    }

    /**
     * Gets the 'block.theme_access_check' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\block\Access\BlockThemeAccessCheck A Drupal\block\Access\BlockThemeAccessCheck instance.
     */
    protected function getBlock_ThemeAccessCheckService()
    {
        return $this->services['block.theme_access_check'] = new \Drupal\block\Access\BlockThemeAccessCheck();
    }

    /**
     * Gets the 'breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Breadcrumb\BreadcrumbManager A Drupal\Core\Breadcrumb\BreadcrumbManager instance.
     */
    protected function getBreadcrumbService()
    {
        $this->services['breadcrumb'] = $instance = new \Drupal\Core\Breadcrumb\BreadcrumbManager();

        $instance->addBuilder($this->get('menu_link.breadcrumb'), 0);
        $instance->addBuilder($this->get('system.breadcrumb.legacy'), 500);

        return $instance;
    }

    /**
     * Gets the 'cache.backend.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\DatabaseBackendFactory A Drupal\Core\Cache\DatabaseBackendFactory instance.
     */
    protected function getCache_Backend_DatabaseService()
    {
        return $this->services['cache.backend.database'] = new \Drupal\Core\Cache\DatabaseBackendFactory($this->get('database'));
    }

    /**
     * Gets the 'cache.backend.memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\MemoryBackendFactory A Drupal\Core\Cache\MemoryBackendFactory instance.
     */
    protected function getCache_Backend_MemoryService()
    {
        return $this->services['cache.backend.memory'] = new \Drupal\Core\Cache\MemoryBackendFactory();
    }

    /**
     * Gets the 'cache.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_BlockService()
    {
        return $this->services['cache.block'] = $this->get('cache_factory')->get('block');
    }

    /**
     * Gets the 'cache.bootstrap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_BootstrapService()
    {
        return $this->services['cache.bootstrap'] = $this->get('cache_factory')->get('bootstrap');
    }

    /**
     * Gets the 'cache.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_CacheService()
    {
        return $this->services['cache.cache'] = $this->get('cache_factory')->get('cache');
    }

    /**
     * Gets the 'cache.ckeditor.languages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_Ckeditor_LanguagesService()
    {
        return $this->services['cache.ckeditor.languages'] = $this->get('cache_factory')->get('ckeditor');
    }

    /**
     * Gets the 'cache.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ConfigService()
    {
        return $this->services['cache.config'] = $this->get('cache_factory')->get('config');
    }

    /**
     * Gets the 'cache.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_EntityService()
    {
        return $this->services['cache.entity'] = $this->get('cache_factory')->get('entity');
    }

    /**
     * Gets the 'cache.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_FieldService()
    {
        return $this->services['cache.field'] = $this->get('cache_factory')->get('field');
    }

    /**
     * Gets the 'cache.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_FilterService()
    {
        return $this->services['cache.filter'] = $this->get('cache_factory')->get('filter');
    }

    /**
     * Gets the 'cache.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_MenuService()
    {
        return $this->services['cache.menu'] = $this->get('cache_factory')->get('menu');
    }

    /**
     * Gets the 'cache.page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_PageService()
    {
        return $this->services['cache.page'] = $this->get('cache_factory')->get('page');
    }

    /**
     * Gets the 'cache.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_PathService()
    {
        return $this->services['cache.path'] = $this->get('cache_factory')->get('path');
    }

    /**
     * Gets the 'cache.toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ToolbarService()
    {
        return $this->services['cache.toolbar'] = $this->get('cache_factory')->get('toolbar');
    }

    /**
     * Gets the 'cache.views_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ViewsInfoService()
    {
        return $this->services['cache.views_info'] = $this->get('cache_factory')->get('views_info');
    }

    /**
     * Gets the 'cache.views_results' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ViewsResultsService()
    {
        return $this->services['cache.views_results'] = $this->get('cache_factory')->get('views_results');
    }

    /**
     * Gets the 'cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheFactory A Drupal\Core\Cache\CacheFactory instance.
     */
    protected function getCacheFactoryService()
    {
        $this->services['cache_factory'] = $instance = new \Drupal\Core\Cache\CacheFactory($this->get('settings'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'class_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getClassLoaderService()
    {
        throw new RuntimeException('You have requested a synthetic service ("class_loader"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'config.cachedstorage.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\FileStorage A Drupal\Core\Config\FileStorage instance.
     */
    protected function getConfig_Cachedstorage_StorageService()
    {
        return $this->services['config.cachedstorage.storage'] = call_user_func(array('Drupal\\Core\\Config\\FileStorageFactory', 'getActive'));
    }

    /**
     * Gets the 'config.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\Context\ContextInterface A Drupal\Core\Config\Context\ContextInterface instance.
     */
    protected function getConfig_ContextService()
    {
        return $this->services['config.context'] = $this->get('config.context.factory')->get();
    }

    /**
     * Gets the 'config.context.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\Context\ConfigContextFactory A Drupal\Core\Config\Context\ConfigContextFactory instance.
     */
    protected function getConfig_Context_FactoryService()
    {
        return $this->services['config.context.factory'] = new \Drupal\Core\Config\Context\ConfigContextFactory($this->get('event_dispatcher'));
    }

    /**
     * Gets the 'config.context.free' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\Context\ContextInterface A Drupal\Core\Config\Context\ContextInterface instance.
     */
    protected function getConfig_Context_FreeService()
    {
        return $this->services['config.context.free'] = $this->get('config.context.factory')->get('Drupal\\Core\\Config\\Context\\FreeConfigContext');
    }

    /**
     * Gets the 'config.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ConfigFactory A Drupal\Core\Config\ConfigFactory instance.
     */
    protected function getConfig_FactoryService()
    {
        return $this->services['config.factory'] = new \Drupal\Core\Config\ConfigFactory($this->get('config.storage'), $this->get('config.context'));
    }

    /**
     * Gets the 'config.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\CachedStorage A Drupal\Core\Config\CachedStorage instance.
     */
    protected function getConfig_StorageService()
    {
        return $this->services['config.storage'] = new \Drupal\Core\Config\CachedStorage($this->get('config.cachedstorage.storage'), $this->get('cache.config'));
    }

    /**
     * Gets the 'config.storage.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\InstallStorage A Drupal\Core\Config\InstallStorage instance.
     */
    protected function getConfig_Storage_InstallerService()
    {
        return $this->services['config.storage.installer'] = new \Drupal\Core\Config\InstallStorage();
    }

    /**
     * Gets the 'config.storage.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\Schema\SchemaStorage A Drupal\Core\Config\Schema\SchemaStorage instance.
     */
    protected function getConfig_Storage_SchemaService()
    {
        return $this->services['config.storage.schema'] = new \Drupal\Core\Config\Schema\SchemaStorage();
    }

    /**
     * Gets the 'config.storage.snapshot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\DatabaseStorage A Drupal\Core\Config\DatabaseStorage instance.
     */
    protected function getConfig_Storage_SnapshotService()
    {
        return $this->services['config.storage.snapshot'] = new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config_snapshot');
    }

    /**
     * Gets the 'config.storage.staging' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\FileStorage A Drupal\Core\Config\FileStorage instance.
     */
    protected function getConfig_Storage_StagingService()
    {
        return $this->services['config.storage.staging'] = call_user_func(array('Drupal\\Core\\Config\\FileStorageFactory', 'getStaging'));
    }

    /**
     * Gets the 'config.typed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\TypedConfigManager A Drupal\Core\Config\TypedConfigManager instance.
     */
    protected function getConfig_TypedService()
    {
        return $this->services['config.typed'] = new \Drupal\Core\Config\TypedConfigManager($this->get('config.storage'), $this->get('config.storage.schema'));
    }

    /**
     * Gets the 'config_global_override_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ConfigGlobalOverrideSubscriber A Drupal\Core\EventSubscriber\ConfigGlobalOverrideSubscriber instance.
     */
    protected function getConfigGlobalOverrideSubscriberService()
    {
        return $this->services['config_global_override_subscriber'] = new \Drupal\Core\EventSubscriber\ConfigGlobalOverrideSubscriber();
    }

    /**
     * Gets the 'config_import_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ConfigImportSubscriber A Drupal\Core\EventSubscriber\ConfigImportSubscriber instance.
     */
    protected function getConfigImportSubscriberService()
    {
        return $this->services['config_import_subscriber'] = new \Drupal\Core\EventSubscriber\ConfigImportSubscriber();
    }

    /**
     * Gets the 'config_snapshot_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber A Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber instance.
     */
    protected function getConfigSnapshotSubscriberService()
    {
        return $this->services['config_snapshot_subscriber'] = new \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber($this->get('config.storage'), $this->get('config.storage.snapshot'));
    }

    /**
     * Gets the 'container.namespaces' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return ArrayObject A ArrayObject instance.
     */
    protected function getContainer_NamespacesService()
    {
        return $this->services['container.namespaces'] = new \ArrayObject(array('Drupal\\block' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/block/lib', 'Drupal\\breakpoint' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/breakpoint/lib', 'Drupal\\ckeditor' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/ckeditor/lib', 'Drupal\\color' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/color/lib', 'Drupal\\comment' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/comment/lib', 'Drupal\\config' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/config/lib', 'Drupal\\contact' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/contact/lib', 'Drupal\\contextual' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/contextual/lib', 'Drupal\\custom_block' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/block/custom_block/lib', 'Drupal\\datetime' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/datetime/lib', 'Drupal\\dblog' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/dblog/lib', 'Drupal\\edit' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/edit/lib', 'Drupal\\editor' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/editor/lib', 'Drupal\\entity' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/entity/lib', 'Drupal\\field' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/field/lib', 'Drupal\\field_ui' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/field_ui/lib', 'Drupal\\file' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/file/lib', 'Drupal\\filter' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/filter/lib', 'Drupal\\help' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/help/lib', 'Drupal\\history' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/history/lib', 'Drupal\\image' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/image/lib', 'Drupal\\menu' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/menu/lib', 'Drupal\\menu_link' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/menu_link/lib', 'Drupal\\node' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/node/lib', 'Drupal\\number' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/number/lib', 'Drupal\\options' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/options/lib', 'Drupal\\overlay' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/overlay/lib', 'Drupal\\path' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/path/lib', 'Drupal\\rdf' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/rdf/lib', 'Drupal\\responsive_preview' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/responsive_preview/lib', 'Drupal\\search' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/search/lib', 'Drupal\\shortcut' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/shortcut/lib', 'Drupal\\system' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/system/lib', 'Drupal\\taxonomy' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/taxonomy/lib', 'Drupal\\text' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/text/lib', 'Drupal\\toolbar' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/toolbar/lib', 'Drupal\\update' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/update/lib', 'Drupal\\user' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/user/lib', 'Drupal\\views_ui' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/views_ui/lib', 'Drupal\\views' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/views/lib', 'Drupal\\spark' => '/media/sda4/shared/workspace/albatrossdigital/profiles/spark/lib', 'Drupal\\Core\\Menu' => '/media/sda4/shared/workspace/albatrossdigital/core/lib', 'Drupal\\Core\\Entity' => '/media/sda4/shared/workspace/albatrossdigital/core/lib', 'Drupal\\Core\\TypedData' => '/media/sda4/shared/workspace/albatrossdigital/core/lib', 'Drupal\\Core\\Http' => '/media/sda4/shared/workspace/albatrossdigital/core/lib', 'Drupal\\Core\\Validation' => '/media/sda4/shared/workspace/albatrossdigital/core/lib'));
    }

    /**
     * Gets the 'content_negotiation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ContentNegotiation A Drupal\Core\ContentNegotiation instance.
     */
    protected function getContentNegotiationService()
    {
        return $this->services['content_negotiation'] = new \Drupal\Core\ContentNegotiation();
    }

    /**
     * Gets the 'controller.dialog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\DialogController A Drupal\Core\Controller\DialogController instance.
     */
    protected function getController_DialogService()
    {
        return $this->services['controller.dialog'] = new \Drupal\Core\Controller\DialogController($this->get('http_kernel'));
    }

    /**
     * Gets the 'controller.page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\HtmlPageController A Drupal\Core\Controller\HtmlPageController instance.
     */
    protected function getController_PageService()
    {
        return $this->services['controller.page'] = new \Drupal\Core\Controller\HtmlPageController($this->get('http_kernel'), $this->get('controller_resolver'));
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\ControllerResolver A Drupal\Core\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Drupal\Core\Controller\ControllerResolver($this);
    }

    /**
     * Gets the 'country_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Locale\CountryManager A Drupal\Core\Locale\CountryManager instance.
     */
    protected function getCountryManagerService()
    {
        return $this->services['country_manager'] = new \Drupal\Core\Locale\CountryManager($this->get('module_handler'));
    }

    /**
     * Gets the 'csrf_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\CsrfTokenGenerator A Drupal\Core\Access\CsrfTokenGenerator instance.
     */
    protected function getCsrfTokenService()
    {
        $this->services['csrf_token'] = $instance = new \Drupal\Core\Access\CsrfTokenGenerator($this->get('private_key'));

        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'current_user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Session\AccountInterface A Drupal\Core\Session\AccountInterface instance.
     * 
     * @throws InactiveScopeException when the 'current_user' service is requested while the 'request' scope is not active
     */
    protected function getCurrentUserService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('current_user', 'request');
        }

        return $this->services['current_user'] = $this->scopedServices['request']['current_user'] = $this->get('authentication')->authenticate($this->get('request'));
    }

    /**
     * Gets the 'database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabaseService()
    {
        return $this->services['database'] = call_user_func(array('Drupal\\Core\\Database\\Database', 'getConnection'), 'default');
    }

    /**
     * Gets the 'database.slave' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabase_SlaveService()
    {
        return $this->services['database.slave'] = call_user_func(array('Drupal\\Core\\Database\\Database', 'getConnection'), 'slave');
    }

    /**
     * Gets the 'date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Datetime\Date A Drupal\Core\Datetime\Date instance.
     */
    protected function getDateService()
    {
        return $this->services['date'] = new \Drupal\Core\Datetime\Date($this->get('entity.manager'), $this->get('language_manager'));
    }

    /**
     * Gets the 'edit.editor.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\edit\EditorSelector A Drupal\edit\EditorSelector instance.
     */
    protected function getEdit_Editor_SelectorService()
    {
        return $this->services['edit.editor.selector'] = new \Drupal\edit\EditorSelector($this->get('plugin.manager.edit.editor'), $this->get('plugin.manager.field.formatter'));
    }

    /**
     * Gets the 'edit.metadata.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\edit\MetadataGenerator A Drupal\edit\MetadataGenerator instance.
     */
    protected function getEdit_Metadata_GeneratorService()
    {
        return $this->services['edit.metadata.generator'] = new \Drupal\edit\MetadataGenerator($this->get('access_check.edit.entity_field'), $this->get('edit.editor.selector'), $this->get('plugin.manager.edit.editor'));
    }

    /**
     * Gets the 'entity.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityManager A Drupal\Core\Entity\EntityManager instance.
     */
    protected function getEntity_ManagerService()
    {
        return $this->services['entity.manager'] = new \Drupal\Core\Entity\EntityManager($this->get('container.namespaces'), $this, $this->get('module_handler'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('string_translation'));
    }

    /**
     * Gets the 'entity.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Query\QueryFactory A Drupal\Core\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_QueryService()
    {
        $this->services['entity.query'] = $instance = new \Drupal\Core\Entity\Query\QueryFactory($this->get('entity.manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'entity.query.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\Entity\Query\QueryFactory A Drupal\Core\Config\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_Query_ConfigService()
    {
        return $this->services['entity.query.config'] = new \Drupal\Core\Config\Entity\Query\QueryFactory($this->get('config.storage'));
    }

    /**
     * Gets the 'entity.query.sql' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Query\Sql\QueryFactory A Drupal\Core\Entity\Query\Sql\QueryFactory instance.
     */
    protected function getEntity_Query_SqlService()
    {
        return $this->services['entity.query.sql'] = new \Drupal\Core\Entity\Query\Sql\QueryFactory($this->get('database'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('paramconverter_subscriber', 'Drupal\\Core\\EventSubscriber\\ParamConverterSubscriber');
        $instance->addSubscriberService('route_subscriber.entity', 'Drupal\\Core\\EventSubscriber\\EntityRouteAlterSubscriber');
        $instance->addSubscriberService('reverse_proxy_subscriber', 'Drupal\\Core\\EventSubscriber\\ReverseProxySubscriber');
        $instance->addSubscriberService('route_special_attributes_subscriber', 'Drupal\\Core\\EventSubscriber\\SpecialAttributesRouteSubscriber');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('view_subscriber', 'Drupal\\Core\\EventSubscriber\\ViewSubscriber');
        $instance->addSubscriberService('legacy_access_subscriber', 'Drupal\\Core\\EventSubscriber\\LegacyAccessSubscriber');
        $instance->addSubscriberService('access_subscriber', 'Drupal\\Core\\EventSubscriber\\AccessSubscriber');
        $instance->addSubscriberService('maintenance_mode_subscriber', 'Drupal\\Core\\EventSubscriber\\MaintenanceModeSubscriber');
        $instance->addSubscriberService('path_subscriber', 'Drupal\\Core\\EventSubscriber\\PathSubscriber');
        $instance->addSubscriberService('legacy_request_subscriber', 'Drupal\\Core\\EventSubscriber\\LegacyRequestSubscriber');
        $instance->addSubscriberService('legacy_controller_subscriber', 'Drupal\\Core\\EventSubscriber\\LegacyControllerSubscriber');
        $instance->addSubscriberService('finish_response_subscriber', 'Drupal\\Core\\EventSubscriber\\FinishResponseSubscriber');
        $instance->addSubscriberService('redirect_response_subscriber', 'Drupal\\Core\\EventSubscriber\\RedirectResponseSubscriber');
        $instance->addSubscriberService('request_close_subscriber', 'Drupal\\Core\\EventSubscriber\\RequestCloseSubscriber');
        $instance->addSubscriberService('config_global_override_subscriber', 'Drupal\\Core\\EventSubscriber\\ConfigGlobalOverrideSubscriber');
        $instance->addSubscriberService('config_import_subscriber', 'Drupal\\Core\\EventSubscriber\\ConfigImportSubscriber');
        $instance->addSubscriberService('config_snapshot_subscriber', 'Drupal\\Core\\EventSubscriber\\ConfigSnapshotSubscriber');
        $instance->addSubscriberService('language_request_subscriber', 'Drupal\\Core\\EventSubscriber\\LanguageRequestSubscriber');
        $instance->addSubscriberService('exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('kernel_destruct_subscriber', 'Drupal\\Core\\EventSubscriber\\KernelDestructionSubscriber');
        $instance->addSubscriberService('ajax.subscriber', 'Drupal\\Core\\Ajax\\AjaxSubscriber');
        $instance->addSubscriberService('slave_database_ignore__subscriber', 'Drupal\\Core\\EventSubscriber\\SlaveDatabaseIgnoreSubscriber');
        $instance->addSubscriberService('authentication_subscriber', 'Drupal\\Core\\EventSubscriber\\AuthenticationSubscriber');
        $instance->addSubscriberService('block.route_subscriber', 'Drupal\\block\\Routing\\RouteSubscriber');
        $instance->addSubscriberService('field_ui.subscriber', 'Drupal\\field_ui\\Routing\\RouteSubscriber');
        $instance->addSubscriberService('image.route_subscriber', 'Drupal\\image\\EventSubscriber\\RouteSubscriber');
        $instance->addSubscriberService('overlay.subscriber', 'Drupal\\overlay\\EventSubscriber\\OverlaySubscriber');
        $instance->addSubscriberService('system.route_subscriber', 'Drupal\\system\\Routing\\RouteSubscriber');
        $instance->addSubscriberService('user_maintenance_mode_subscriber', 'Drupal\\user\\EventSubscriber\\MaintenanceModeSubscriber');
        $instance->addSubscriberService('views.route_subscriber', 'Drupal\\views\\EventSubscriber\\RouteSubscriber');

        return $instance;
    }

    /**
     * Gets the 'exception_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\ExceptionController A Drupal\Core\Controller\ExceptionController instance.
     */
    protected function getExceptionControllerService()
    {
        $this->services['exception_controller'] = $instance = new \Drupal\Core\Controller\ExceptionController($this->get('content_negotiation'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getExceptionListenerService()
    {
        return $this->services['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener(array(0 => $this->get('exception_controller'), 1 => 'execute'));
    }

    /**
     * Gets the 'feed.bridge.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_ReaderService()
    {
        $this->services['feed.bridge.reader'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.reader.');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'feed.bridge.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_WriterService()
    {
        $this->services['feed.bridge.writer'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.writer.');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'feed.reader.atomentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Atom\Entry A Zend\Feed\Reader\Extension\Atom\Entry instance.
     */
    protected function getFeed_Reader_AtomentryService()
    {
        return $this->services['feed.reader.atomentry'] = new \Zend\Feed\Reader\Extension\Atom\Entry();
    }

    /**
     * Gets the 'feed.reader.atomfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Atom\Feed A Zend\Feed\Reader\Extension\Atom\Feed instance.
     */
    protected function getFeed_Reader_AtomfeedService()
    {
        return $this->services['feed.reader.atomfeed'] = new \Zend\Feed\Reader\Extension\Atom\Feed();
    }

    /**
     * Gets the 'feed.reader.contententry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Content\Entry A Zend\Feed\Reader\Extension\Content\Entry instance.
     */
    protected function getFeed_Reader_ContententryService()
    {
        return $this->services['feed.reader.contententry'] = new \Zend\Feed\Reader\Extension\Content\Entry();
    }

    /**
     * Gets the 'feed.reader.dublincoreentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\DublinCore\Entry A Zend\Feed\Reader\Extension\DublinCore\Entry instance.
     */
    protected function getFeed_Reader_DublincoreentryService()
    {
        return $this->services['feed.reader.dublincoreentry'] = new \Zend\Feed\Reader\Extension\DublinCore\Entry();
    }

    /**
     * Gets the 'feed.reader.dublincorefeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\DublinCore\Feed A Zend\Feed\Reader\Extension\DublinCore\Feed instance.
     */
    protected function getFeed_Reader_DublincorefeedService()
    {
        return $this->services['feed.reader.dublincorefeed'] = new \Zend\Feed\Reader\Extension\DublinCore\Feed();
    }

    /**
     * Gets the 'feed.reader.podcastentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Podcast\Entry A Zend\Feed\Reader\Extension\Podcast\Entry instance.
     */
    protected function getFeed_Reader_PodcastentryService()
    {
        return $this->services['feed.reader.podcastentry'] = new \Zend\Feed\Reader\Extension\Podcast\Entry();
    }

    /**
     * Gets the 'feed.reader.podcastfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Podcast\Feed A Zend\Feed\Reader\Extension\Podcast\Feed instance.
     */
    protected function getFeed_Reader_PodcastfeedService()
    {
        return $this->services['feed.reader.podcastfeed'] = new \Zend\Feed\Reader\Extension\Podcast\Feed();
    }

    /**
     * Gets the 'feed.reader.slashentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Slash\Entry A Zend\Feed\Reader\Extension\Slash\Entry instance.
     */
    protected function getFeed_Reader_SlashentryService()
    {
        return $this->services['feed.reader.slashentry'] = new \Zend\Feed\Reader\Extension\Slash\Entry();
    }

    /**
     * Gets the 'feed.reader.threadentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Thread\Entry A Zend\Feed\Reader\Extension\Thread\Entry instance.
     */
    protected function getFeed_Reader_ThreadentryService()
    {
        return $this->services['feed.reader.threadentry'] = new \Zend\Feed\Reader\Extension\Thread\Entry();
    }

    /**
     * Gets the 'feed.reader.wellformedwebentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\WellFormedWeb\Entry A Zend\Feed\Reader\Extension\WellFormedWeb\Entry instance.
     */
    protected function getFeed_Reader_WellformedwebentryService()
    {
        return $this->services['feed.reader.wellformedwebentry'] = new \Zend\Feed\Reader\Extension\WellFormedWeb\Entry();
    }

    /**
     * Gets the 'feed.writer.atomrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Atom\Renderer\Feed A Zend\Feed\Writer\Extension\Atom\Renderer\Feed instance.
     */
    protected function getFeed_Writer_AtomrendererfeedService()
    {
        return $this->services['feed.writer.atomrendererfeed'] = new \Zend\Feed\Writer\Extension\Atom\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.contentrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Content\Renderer\Entry A Zend\Feed\Writer\Extension\Content\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ContentrendererentryService()
    {
        return $this->services['feed.writer.contentrendererentry'] = new \Zend\Feed\Writer\Extension\Content\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.dublincorerendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry A Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry instance.
     */
    protected function getFeed_Writer_DublincorerendererentryService()
    {
        return $this->services['feed.writer.dublincorerendererentry'] = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.dublincorerendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed A Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed instance.
     */
    protected function getFeed_Writer_DublincorerendererfeedService()
    {
        return $this->services['feed.writer.dublincorerendererfeed'] = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.itunesentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Entry A Zend\Feed\Writer\Extension\ITunes\Entry instance.
     */
    protected function getFeed_Writer_ItunesentryService()
    {
        return $this->services['feed.writer.itunesentry'] = new \Zend\Feed\Writer\Extension\ITunes\Entry();
    }

    /**
     * Gets the 'feed.writer.itunesfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Feed A Zend\Feed\Writer\Extension\ITunes\Feed instance.
     */
    protected function getFeed_Writer_ItunesfeedService()
    {
        return $this->services['feed.writer.itunesfeed'] = new \Zend\Feed\Writer\Extension\ITunes\Feed();
    }

    /**
     * Gets the 'feed.writer.itunesrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Renderer\Entry A Zend\Feed\Writer\Extension\ITunes\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ItunesrendererentryService()
    {
        return $this->services['feed.writer.itunesrendererentry'] = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.itunesrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Renderer\Feed A Zend\Feed\Writer\Extension\ITunes\Renderer\Feed instance.
     */
    protected function getFeed_Writer_ItunesrendererfeedService()
    {
        return $this->services['feed.writer.itunesrendererfeed'] = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.slashrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Slash\Renderer\Entry A Zend\Feed\Writer\Extension\Slash\Renderer\Entry instance.
     */
    protected function getFeed_Writer_SlashrendererentryService()
    {
        return $this->services['feed.writer.slashrendererentry'] = new \Zend\Feed\Writer\Extension\Slash\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.threadingrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Threading\Renderer\Entry A Zend\Feed\Writer\Extension\Threading\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ThreadingrendererentryService()
    {
        return $this->services['feed.writer.threadingrendererentry'] = new \Zend\Feed\Writer\Extension\Threading\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.wellformedwebrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry A Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry instance.
     */
    protected function getFeed_Writer_WellformedwebrendererentryService()
    {
        return $this->services['feed.writer.wellformedwebrendererentry'] = new \Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry();
    }

    /**
     * Gets the 'field.info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field\FieldInfo A Drupal\field\FieldInfo instance.
     */
    protected function getField_InfoService()
    {
        return $this->services['field.info'] = new \Drupal\field\FieldInfo($this->get('cache.field'), $this->get('config.factory'), $this->get('module_handler'), $this->get('plugin.manager.entity.field.field_type'));
    }

    /**
     * Gets the 'field_ui.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field_ui\Routing\RouteSubscriber A Drupal\field_ui\Routing\RouteSubscriber instance.
     */
    protected function getFieldUi_SubscriberService()
    {
        return $this->services['field_ui.subscriber'] = new \Drupal\field_ui\Routing\RouteSubscriber($this->get('entity.manager'));
    }

    /**
     * Gets the 'file.usage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\file\FileUsage\DatabaseFileUsageBackend A Drupal\file\FileUsage\DatabaseFileUsageBackend instance.
     */
    protected function getFile_UsageService()
    {
        return $this->services['file.usage'] = new \Drupal\file\FileUsage\DatabaseFileUsageBackend($this->get('database'));
    }

    /**
     * Gets the 'finish_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\FinishResponseSubscriber A Drupal\Core\EventSubscriber\FinishResponseSubscriber instance.
     * 
     * @throws InactiveScopeException when the 'finish_response_subscriber' service is requested while the 'request' scope is not active
     */
    protected function getFinishResponseSubscriberService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('finish_response_subscriber', 'request');
        }

        return $this->services['finish_response_subscriber'] = $this->scopedServices['request']['finish_response_subscriber'] = new \Drupal\Core\EventSubscriber\FinishResponseSubscriber($this->get('language_manager'));
    }

    /**
     * Gets the 'flood' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Flood\DatabaseBackend A Drupal\Core\Flood\DatabaseBackend instance.
     */
    protected function getFloodService()
    {
        return $this->services['flood'] = new \Drupal\Core\Flood\DatabaseBackend($this->get('database'), $this->get('request'));
    }

    /**
     * Gets the 'http_client_simpletest_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Http\Plugin\SimpletestHttpRequestSubscriber A Drupal\Core\Http\Plugin\SimpletestHttpRequestSubscriber instance.
     */
    protected function getHttpClientSimpletestSubscriberService()
    {
        return $this->services['http_client_simpletest_subscriber'] = new \Drupal\Core\Http\Plugin\SimpletestHttpRequestSubscriber();
    }

    /**
     * Gets the 'http_default_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Guzzle\Http\Client A Guzzle\Http\Client instance.
     */
    protected function getHttpDefaultClientService()
    {
        $this->services['http_default_client'] = $instance = new \Guzzle\Http\Client(NULL, array('curl.CURLOPT_TIMEOUT' => 30, 'curl.CURLOPT_MAXREDIRS' => 3));

        $instance->addSubscriber($this->get('http_client_simpletest_subscriber'));
        $instance->setUserAgent('Drupal (+http://drupal.org/)');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\HttpKernel A Drupal\Core\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Drupal\Core\HttpKernel($this->get('event_dispatcher'), $this, $this->get('controller_resolver'));
    }

    /**
     * Gets the 'image.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Image\ImageFactory A Drupal\Core\Image\ImageFactory instance.
     */
    protected function getImage_FactoryService()
    {
        return $this->services['image.factory'] = new \Drupal\Core\Image\ImageFactory($this->get('image.toolkit'));
    }

    /**
     * Gets the 'image.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\image\EventSubscriber\RouteSubscriber A Drupal\image\EventSubscriber\RouteSubscriber instance.
     */
    protected function getImage_RouteSubscriberService()
    {
        return $this->services['image.route_subscriber'] = new \Drupal\image\EventSubscriber\RouteSubscriber();
    }

    /**
     * Gets the 'image.toolkit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\Plugin\ImageToolkitInterface A Drupal\system\Plugin\ImageToolkitInterface instance.
     */
    protected function getImage_ToolkitService()
    {
        return $this->services['image.toolkit'] = $this->get('image.toolkit.manager')->getDefaultToolkit();
    }

    /**
     * Gets the 'image.toolkit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\Plugin\ImageToolkitManager A Drupal\system\Plugin\ImageToolkitManager instance.
     */
    protected function getImage_Toolkit_ManagerService()
    {
        return $this->services['image.toolkit.manager'] = new \Drupal\system\Plugin\ImageToolkitManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel_destruct_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\KernelDestructionSubscriber A Drupal\Core\EventSubscriber\KernelDestructionSubscriber instance.
     */
    protected function getKernelDestructSubscriberService()
    {
        $this->services['kernel_destruct_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\KernelDestructionSubscriber();

        $instance->setContainer($this);
        $instance->registerService('keyvalue.expirable.database');
        $instance->registerService('path.alias_whitelist');

        return $instance;
    }

    /**
     * Gets the 'keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueFactory A Drupal\Core\KeyValueStore\KeyValueFactory instance.
     */
    protected function getKeyvalueService()
    {
        return $this->services['keyvalue'] = new \Drupal\Core\KeyValueStore\KeyValueFactory($this);
    }

    /**
     * Gets the 'keyvalue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueDatabaseFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseFactory instance.
     */
    protected function getKeyvalue_DatabaseService()
    {
        return $this->services['keyvalue.database'] = new \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory($this->get('database'));
    }

    /**
     * Gets the 'keyvalue.expirable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueExpirableFactory A Drupal\Core\KeyValueStore\KeyValueExpirableFactory instance.
     */
    protected function getKeyvalue_ExpirableService()
    {
        return $this->services['keyvalue.expirable'] = new \Drupal\Core\KeyValueStore\KeyValueExpirableFactory($this);
    }

    /**
     * Gets the 'keyvalue.expirable.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory instance.
     */
    protected function getKeyvalue_Expirable_DatabaseService()
    {
        return $this->services['keyvalue.expirable.database'] = new \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory($this->get('database'));
    }

    /**
     * Gets the 'language_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Language\LanguageManager A Drupal\Core\Language\LanguageManager instance.
     */
    protected function getLanguageManagerService()
    {
        return $this->services['language_manager'] = new \Drupal\Core\Language\LanguageManager($this->get('state'));
    }

    /**
     * Gets the 'language_request_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\LanguageRequestSubscriber A Drupal\Core\EventSubscriber\LanguageRequestSubscriber instance.
     */
    protected function getLanguageRequestSubscriberService()
    {
        return $this->services['language_request_subscriber'] = new \Drupal\Core\EventSubscriber\LanguageRequestSubscriber($this->get('language_manager'), $this->get('string_translation'));
    }

    /**
     * Gets the 'legacy_access_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\LegacyAccessSubscriber A Drupal\Core\EventSubscriber\LegacyAccessSubscriber instance.
     */
    protected function getLegacyAccessSubscriberService()
    {
        return $this->services['legacy_access_subscriber'] = new \Drupal\Core\EventSubscriber\LegacyAccessSubscriber();
    }

    /**
     * Gets the 'legacy_controller_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\LegacyControllerSubscriber A Drupal\Core\EventSubscriber\LegacyControllerSubscriber instance.
     */
    protected function getLegacyControllerSubscriberService()
    {
        return $this->services['legacy_controller_subscriber'] = new \Drupal\Core\EventSubscriber\LegacyControllerSubscriber();
    }

    /**
     * Gets the 'legacy_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\NullGenerator A Drupal\Core\Routing\NullGenerator instance.
     */
    protected function getLegacyGeneratorService()
    {
        return $this->services['legacy_generator'] = new \Drupal\Core\Routing\NullGenerator();
    }

    /**
     * Gets the 'legacy_request_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\LegacyRequestSubscriber A Drupal\Core\EventSubscriber\LegacyRequestSubscriber instance.
     */
    protected function getLegacyRequestSubscriberService()
    {
        return $this->services['legacy_request_subscriber'] = new \Drupal\Core\EventSubscriber\LegacyRequestSubscriber();
    }

    /**
     * Gets the 'legacy_router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\DynamicRouter A Symfony\Cmf\Component\Routing\DynamicRouter instance.
     */
    protected function getLegacyRouterService()
    {
        $this->services['legacy_router'] = $instance = new \Symfony\Cmf\Component\Routing\DynamicRouter($this->get('router.request_context'), $this->get('legacy_url_matcher'), $this->get('legacy_generator'));

        $instance->addRouteEnhancer($this->get('route_enhancer.ajax'), 20);

        return $instance;
    }

    /**
     * Gets the 'legacy_url_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\LegacyUrlMatcher A Drupal\Core\LegacyUrlMatcher instance.
     */
    protected function getLegacyUrlMatcherService()
    {
        return $this->services['legacy_url_matcher'] = new \Drupal\Core\LegacyUrlMatcher();
    }

    /**
     * Gets the 'link_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Utility\LinkGenerator A Drupal\Core\Utility\LinkGenerator instance.
     */
    protected function getLinkGeneratorService()
    {
        $this->services['link_generator'] = $instance = new \Drupal\Core\Utility\LinkGenerator($this->get('url_generator'), $this->get('module_handler'), $this->get('language_manager'));

        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'lock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Lock\DatabaseLockBackend A Drupal\Core\Lock\DatabaseLockBackend instance.
     */
    protected function getLockService()
    {
        return $this->services['lock'] = new \Drupal\Core\Lock\DatabaseLockBackend();
    }

    /**
     * Gets the 'mail.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Mail\MailFactory A Drupal\Core\Mail\MailFactory instance.
     */
    protected function getMail_FactoryService()
    {
        return $this->services['mail.factory'] = new \Drupal\Core\Mail\MailFactory($this->get('config.factory'));
    }

    /**
     * Gets the 'maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\MaintenanceModeSubscriber A Drupal\Core\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getMaintenanceModeSubscriberService()
    {
        return $this->services['maintenance_mode_subscriber'] = new \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber();
    }

    /**
     * Gets the 'menu_link.breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\menu_link\MenuLinkBreadcrumbBuilder A Drupal\menu_link\MenuLinkBreadcrumbBuilder instance.
     */
    protected function getMenuLink_BreadcrumbService()
    {
        return $this->services['menu_link.breadcrumb'] = new \Drupal\menu_link\MenuLinkBreadcrumbBuilder();
    }

    /**
     * Gets the 'mime_type_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\MimeTypeMatcher A Drupal\Core\Routing\MimeTypeMatcher instance.
     */
    protected function getMimeTypeMatcherService()
    {
        return $this->services['mime_type_matcher'] = new \Drupal\Core\Routing\MimeTypeMatcher();
    }

    /**
     * Gets the 'module_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Extension\CachedModuleHandler A Drupal\Core\Extension\CachedModuleHandler instance.
     */
    protected function getModuleHandlerService()
    {
        return $this->services['module_handler'] = new \Drupal\Core\Extension\CachedModuleHandler(array('block' => 'core/modules/block/block.module', 'breakpoint' => 'core/modules/breakpoint/breakpoint.module', 'ckeditor' => 'core/modules/ckeditor/ckeditor.module', 'color' => 'core/modules/color/color.module', 'comment' => 'core/modules/comment/comment.module', 'config' => 'core/modules/config/config.module', 'contact' => 'core/modules/contact/contact.module', 'contextual' => 'core/modules/contextual/contextual.module', 'custom_block' => 'core/modules/block/custom_block/custom_block.module', 'datetime' => 'core/modules/datetime/datetime.module', 'dblog' => 'core/modules/dblog/dblog.module', 'edit' => 'core/modules/edit/edit.module', 'editor' => 'core/modules/editor/editor.module', 'entity' => 'core/modules/entity/entity.module', 'field' => 'core/modules/field/field.module', 'field_ui' => 'core/modules/field_ui/field_ui.module', 'file' => 'core/modules/file/file.module', 'filter' => 'core/modules/filter/filter.module', 'help' => 'core/modules/help/help.module', 'history' => 'core/modules/history/history.module', 'image' => 'core/modules/image/image.module', 'menu' => 'core/modules/menu/menu.module', 'menu_link' => 'core/modules/menu_link/menu_link.module', 'node' => 'core/modules/node/node.module', 'number' => 'core/modules/number/number.module', 'options' => 'core/modules/options/options.module', 'overlay' => 'core/modules/overlay/overlay.module', 'path' => 'core/modules/path/path.module', 'rdf' => 'core/modules/rdf/rdf.module', 'responsive_preview' => 'core/modules/responsive_preview/responsive_preview.module', 'search' => 'core/modules/search/search.module', 'shortcut' => 'core/modules/shortcut/shortcut.module', 'system' => 'core/modules/system/system.module', 'taxonomy' => 'core/modules/taxonomy/taxonomy.module', 'text' => 'core/modules/text/text.module', 'toolbar' => 'core/modules/toolbar/toolbar.module', 'update' => 'core/modules/update/update.module', 'user' => 'core/modules/user/user.module', 'views_ui' => 'core/modules/views_ui/views_ui.module', 'views' => 'core/modules/views/views.module', 'spark' => 'profiles/spark/spark.profile'), $this->get('state'), $this->get('cache.bootstrap'));
    }

    /**
     * Gets the 'node.grant_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\node\NodeGrantDatabaseStorage A Drupal\node\NodeGrantDatabaseStorage instance.
     */
    protected function getNode_GrantStorageService()
    {
        return $this->services['node.grant_storage'] = new \Drupal\node\NodeGrantDatabaseStorage($this->get('database'), $this->get('module_handler'));
    }

    /**
     * Gets the 'overlay.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\overlay\EventSubscriber\OverlaySubscriber A Drupal\overlay\EventSubscriber\OverlaySubscriber instance.
     */
    protected function getOverlay_SubscriberService()
    {
        return $this->services['overlay.subscriber'] = new \Drupal\overlay\EventSubscriber\OverlaySubscriber($this->get('content_negotiation'), $this->get('user.data'), $this->get('url_generator'));
    }

    /**
     * Gets the 'paramconverter.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\EntityConverter A Drupal\Core\ParamConverter\EntityConverter instance.
     */
    protected function getParamconverter_EntityService()
    {
        return $this->services['paramconverter.entity'] = new \Drupal\Core\ParamConverter\EntityConverter($this->get('entity.manager'));
    }

    /**
     * Gets the 'paramconverter.views_ui' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views_ui\ParamConverter\ViewUIConverter A Drupal\views_ui\ParamConverter\ViewUIConverter instance.
     */
    protected function getParamconverter_ViewsUiService()
    {
        return $this->services['paramconverter.views_ui'] = new \Drupal\views_ui\ParamConverter\ViewUIConverter($this->get('entity.manager'), $this->get('user.tempstore'));
    }

    /**
     * Gets the 'paramconverter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\ParamConverterManager A Drupal\Core\ParamConverter\ParamConverterManager instance.
     */
    protected function getParamconverterManagerService()
    {
        $this->services['paramconverter_manager'] = $instance = new \Drupal\Core\ParamConverter\ParamConverterManager();

        $instance->setContainer($this);
        $instance->addConverter('paramconverter.entity', 0);
        $instance->addConverter('paramconverter.views_ui', 10);

        return $instance;
    }

    /**
     * Gets the 'paramconverter_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ParamConverterSubscriber A Drupal\Core\EventSubscriber\ParamConverterSubscriber instance.
     */
    protected function getParamconverterSubscriberService()
    {
        return $this->services['paramconverter_subscriber'] = new \Drupal\Core\EventSubscriber\ParamConverterSubscriber($this->get('paramconverter_manager'));
    }

    /**
     * Gets the 'password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Password\PhpassHashedPassword A Drupal\Core\Password\PhpassHashedPassword instance.
     */
    protected function getPasswordService()
    {
        return $this->services['password'] = new \Drupal\Core\Password\PhpassHashedPassword(16);
    }

    /**
     * Gets the 'path.alias_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasManager A Drupal\Core\Path\AliasManager instance.
     */
    protected function getPath_AliasManagerService()
    {
        return $this->services['path.alias_manager'] = new \Drupal\Core\Path\AliasManager($this->get('database'), $this->get('path.alias_whitelist'), $this->get('language_manager'));
    }

    /**
     * Gets the 'path.alias_manager.cached' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\CacheDecorator\AliasManagerCacheDecorator A Drupal\Core\CacheDecorator\AliasManagerCacheDecorator instance.
     */
    protected function getPath_AliasManager_CachedService()
    {
        return $this->services['path.alias_manager.cached'] = new \Drupal\Core\CacheDecorator\AliasManagerCacheDecorator($this->get('path.alias_manager'), $this->get('cache.path'));
    }

    /**
     * Gets the 'path.alias_whitelist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasWhitelist A Drupal\Core\Path\AliasWhitelist instance.
     */
    protected function getPath_AliasWhitelistService()
    {
        return $this->services['path.alias_whitelist'] = new \Drupal\Core\Path\AliasWhitelist('path_alias_whitelist', $this->get('cache.cache'), $this->get('lock'), $this->get('state'), $this->get('database'));
    }

    /**
     * Gets the 'path.crud' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\Path A Drupal\Core\Path\Path instance.
     */
    protected function getPath_CrudService()
    {
        return $this->services['path.crud'] = new \Drupal\Core\Path\Path($this->get('database'), $this->get('path.alias_manager'));
    }

    /**
     * Gets the 'path_processor.files' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\PathProcessor\PathProcessorFiles A Drupal\system\PathProcessor\PathProcessorFiles instance.
     */
    protected function getPathProcessor_FilesService()
    {
        return $this->services['path_processor.files'] = new \Drupal\system\PathProcessor\PathProcessorFiles();
    }

    /**
     * Gets the 'path_processor.image_styles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\image\PathProcessor\PathProcessorImageStyles A Drupal\image\PathProcessor\PathProcessorImageStyles instance.
     */
    protected function getPathProcessor_ImageStylesService()
    {
        return $this->services['path_processor.image_styles'] = new \Drupal\image\PathProcessor\PathProcessorImageStyles();
    }

    /**
     * Gets the 'path_processor_alias' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorAlias A Drupal\Core\PathProcessor\PathProcessorAlias instance.
     */
    protected function getPathProcessorAliasService()
    {
        return $this->services['path_processor_alias'] = new \Drupal\Core\PathProcessor\PathProcessorAlias($this->get('path.alias_manager'));
    }

    /**
     * Gets the 'path_processor_decode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorDecode A Drupal\Core\PathProcessor\PathProcessorDecode instance.
     */
    protected function getPathProcessorDecodeService()
    {
        return $this->services['path_processor_decode'] = new \Drupal\Core\PathProcessor\PathProcessorDecode();
    }

    /**
     * Gets the 'path_processor_front' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorFront A Drupal\Core\PathProcessor\PathProcessorFront instance.
     */
    protected function getPathProcessorFrontService()
    {
        return $this->services['path_processor_front'] = new \Drupal\Core\PathProcessor\PathProcessorFront($this->get('config.factory'));
    }

    /**
     * Gets the 'path_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorManager A Drupal\Core\PathProcessor\PathProcessorManager instance.
     */
    protected function getPathProcessorManagerService()
    {
        $a = $this->get('path_processor_front');
        $b = $this->get('path_processor_alias');

        $this->services['path_processor_manager'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorManager();

        $instance->addInbound($this->get('path_processor_decode'), 1000);
        $instance->addInbound($a, 200);
        $instance->addInbound($b, 100);
        $instance->addInbound($this->get('path_processor.image_styles'), 300);
        $instance->addInbound($this->get('path_processor.files'), 200);
        $instance->addOutbound($a, 200);
        $instance->addOutbound($b, 300);

        return $instance;
    }

    /**
     * Gets the 'path_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\PathSubscriber A Drupal\Core\EventSubscriber\PathSubscriber instance.
     */
    protected function getPathSubscriberService()
    {
        return $this->services['path_subscriber'] = new \Drupal\Core\EventSubscriber\PathSubscriber($this->get('path.alias_manager.cached'), $this->get('path_processor_manager'));
    }

    /**
     * Gets the 'plugin.manager.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Action\ActionManager A Drupal\Core\Action\ActionManager instance.
     */
    protected function getPlugin_Manager_ActionService()
    {
        return $this->services['plugin.manager.action'] = new \Drupal\Core\Action\ActionManager($this->get('container.namespaces'));
    }

    /**
     * Gets the 'plugin.manager.archiver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Archiver\ArchiverManager A Drupal\Core\Archiver\ArchiverManager instance.
     */
    protected function getPlugin_Manager_ArchiverService()
    {
        return $this->services['plugin.manager.archiver'] = new \Drupal\Core\Archiver\ArchiverManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\block\Plugin\Type\BlockManager A Drupal\block\Plugin\Type\BlockManager instance.
     */
    protected function getPlugin_Manager_BlockService()
    {
        return $this->services['plugin.manager.block'] = new \Drupal\block\Plugin\Type\BlockManager($this->get('container.namespaces'), $this->get('cache.block'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.ckeditor.plugin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\ckeditor\CKEditorPluginManager A Drupal\ckeditor\CKEditorPluginManager instance.
     */
    protected function getPlugin_Manager_Ckeditor_PluginService()
    {
        return $this->services['plugin.manager.ckeditor.plugin'] = new \Drupal\ckeditor\CKEditorPluginManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.condition' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Condition\ConditionManager A Drupal\Core\Condition\ConditionManager instance.
     */
    protected function getPlugin_Manager_ConditionService()
    {
        return $this->services['plugin.manager.condition'] = new \Drupal\Core\Condition\ConditionManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.edit.editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\edit\Plugin\InPlaceEditorManager A Drupal\edit\Plugin\InPlaceEditorManager instance.
     */
    protected function getPlugin_Manager_Edit_EditorService()
    {
        return $this->services['plugin.manager.edit.editor'] = new \Drupal\edit\Plugin\InPlaceEditorManager($this->get('container.namespaces'));
    }

    /**
     * Gets the 'plugin.manager.editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\editor\Plugin\EditorManager A Drupal\editor\Plugin\EditorManager instance.
     */
    protected function getPlugin_Manager_EditorService()
    {
        return $this->services['plugin.manager.editor'] = new \Drupal\editor\Plugin\EditorManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.entity.field.field_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Field\FieldTypePluginManager A Drupal\Core\Entity\Field\FieldTypePluginManager instance.
     */
    protected function getPlugin_Manager_Entity_Field_FieldTypeService()
    {
        return $this->services['plugin.manager.entity.field.field_type'] = new \Drupal\Core\Entity\Field\FieldTypePluginManager($this->get('container.namespaces'), $this->get('cache.entity'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.field.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field\Plugin\Type\Formatter\FormatterPluginManager A Drupal\field\Plugin\Type\Formatter\FormatterPluginManager instance.
     */
    protected function getPlugin_Manager_Field_FormatterService()
    {
        return $this->services['plugin.manager.field.formatter'] = new \Drupal\field\Plugin\Type\Formatter\FormatterPluginManager($this->get('container.namespaces'), $this->get('cache.field'), $this->get('module_handler'), $this->get('language_manager'), $this->get('plugin.manager.entity.field.field_type'));
    }

    /**
     * Gets the 'plugin.manager.field.widget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\field\Plugin\Type\Widget\WidgetPluginManager A Drupal\field\Plugin\Type\Widget\WidgetPluginManager instance.
     */
    protected function getPlugin_Manager_Field_WidgetService()
    {
        return $this->services['plugin.manager.field.widget'] = new \Drupal\field\Plugin\Type\Widget\WidgetPluginManager($this->get('container.namespaces'), $this->get('cache.field'), $this->get('module_handler'), $this->get('language_manager'), $this->get('plugin.manager.entity.field.field_type'));
    }

    /**
     * Gets the 'plugin.manager.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\filter\FilterPluginManager A Drupal\filter\FilterPluginManager instance.
     */
    protected function getPlugin_Manager_FilterService()
    {
        return $this->services['plugin.manager.filter'] = new \Drupal\filter\FilterPluginManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.image.effect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\image\ImageEffectManager A Drupal\image\ImageEffectManager instance.
     */
    protected function getPlugin_Manager_Image_EffectService()
    {
        return $this->services['plugin.manager.image.effect'] = new \Drupal\image\ImageEffectManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.menu.local_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\LocalActionManager A Drupal\Core\Menu\LocalActionManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalActionService()
    {
        return $this->services['plugin.manager.menu.local_action'] = new \Drupal\Core\Menu\LocalActionManager($this->get('container.namespaces'), $this->get('controller_resolver'), $this->get('request'), $this->get('module_handler'), $this->get('cache.cache'), $this->get('language_manager'));
    }

    /**
     * Gets the 'plugin.manager.menu.local_task' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\LocalTaskManager A Drupal\Core\Menu\LocalTaskManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalTaskService()
    {
        return $this->services['plugin.manager.menu.local_task'] = new \Drupal\Core\Menu\LocalTaskManager($this->get('container.namespaces'), $this->get('controller_resolver'), $this->get('request'), $this->get('router.route_provider'), $this->get('module_handler'), $this->get('cache.cache'), $this->get('language_manager'));
    }

    /**
     * Gets the 'plugin.manager.views.access' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_AccessService()
    {
        return $this->services['plugin.manager.views.access'] = new \Drupal\views\Plugin\ViewsPluginManager('access', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_AreaService()
    {
        return $this->services['plugin.manager.views.area'] = new \Drupal\views\Plugin\ViewsHandlerManager('area', $this->get('container.namespaces'), $this->get('views.views_data'));
    }

    /**
     * Gets the 'plugin.manager.views.argument' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentService()
    {
        return $this->services['plugin.manager.views.argument'] = new \Drupal\views\Plugin\ViewsHandlerManager('argument', $this->get('container.namespaces'), $this->get('views.views_data'));
    }

    /**
     * Gets the 'plugin.manager.views.argument_default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentDefaultService()
    {
        return $this->services['plugin.manager.views.argument_default'] = new \Drupal\views\Plugin\ViewsPluginManager('argument_default', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.argument_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentValidatorService()
    {
        return $this->services['plugin.manager.views.argument_validator'] = new \Drupal\views\Plugin\ViewsPluginManager('argument_validator', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_CacheService()
    {
        return $this->services['plugin.manager.views.cache'] = new \Drupal\views\Plugin\ViewsPluginManager('cache', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.display' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_DisplayService()
    {
        return $this->services['plugin.manager.views.display'] = new \Drupal\views\Plugin\ViewsPluginManager('display', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.display_extender' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_DisplayExtenderService()
    {
        return $this->services['plugin.manager.views.display_extender'] = new \Drupal\views\Plugin\ViewsPluginManager('display_extender', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.exposed_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ExposedFormService()
    {
        return $this->services['plugin.manager.views.exposed_form'] = new \Drupal\views\Plugin\ViewsPluginManager('exposed_form', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_FieldService()
    {
        return $this->services['plugin.manager.views.field'] = new \Drupal\views\Plugin\ViewsHandlerManager('field', $this->get('container.namespaces'), $this->get('views.views_data'));
    }

    /**
     * Gets the 'plugin.manager.views.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_FilterService()
    {
        return $this->services['plugin.manager.views.filter'] = new \Drupal\views\Plugin\ViewsHandlerManager('filter', $this->get('container.namespaces'), $this->get('views.views_data'));
    }

    /**
     * Gets the 'plugin.manager.views.join' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_JoinService()
    {
        return $this->services['plugin.manager.views.join'] = new \Drupal\views\Plugin\ViewsHandlerManager('join', $this->get('container.namespaces'), $this->get('views.views_data'));
    }

    /**
     * Gets the 'plugin.manager.views.pager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_PagerService()
    {
        return $this->services['plugin.manager.views.pager'] = new \Drupal\views\Plugin\ViewsPluginManager('pager', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_QueryService()
    {
        return $this->services['plugin.manager.views.query'] = new \Drupal\views\Plugin\ViewsPluginManager('query', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.relationship' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_RelationshipService()
    {
        return $this->services['plugin.manager.views.relationship'] = new \Drupal\views\Plugin\ViewsHandlerManager('relationship', $this->get('container.namespaces'), $this->get('views.views_data'));
    }

    /**
     * Gets the 'plugin.manager.views.row' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_RowService()
    {
        return $this->services['plugin.manager.views.row'] = new \Drupal\views\Plugin\ViewsPluginManager('row', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.sort' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_SortService()
    {
        return $this->services['plugin.manager.views.sort'] = new \Drupal\views\Plugin\ViewsHandlerManager('sort', $this->get('container.namespaces'), $this->get('views.views_data'));
    }

    /**
     * Gets the 'plugin.manager.views.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_StyleService()
    {
        return $this->services['plugin.manager.views.style'] = new \Drupal\views\Plugin\ViewsPluginManager('style', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.views.wizard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_WizardService()
    {
        return $this->services['plugin.manager.views.wizard'] = new \Drupal\views\Plugin\ViewsPluginManager('wizard', $this->get('container.namespaces'), $this->get('cache.views_info'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'private_key' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PrivateKey A Drupal\Core\PrivateKey instance.
     */
    protected function getPrivateKeyService()
    {
        return $this->services['private_key'] = new \Drupal\Core\PrivateKey($this->get('state'));
    }

    /**
     * Gets the 'queue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Queue\QueueFactory A Drupal\Core\Queue\QueueFactory instance.
     */
    protected function getQueueService()
    {
        $this->services['queue'] = $instance = new \Drupal\Core\Queue\QueueFactory($this->get('settings'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'queue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Queue\QueueDatabaseFactory A Drupal\Core\Queue\QueueDatabaseFactory instance.
     */
    protected function getQueue_DatabaseService()
    {
        return $this->services['queue.database'] = new \Drupal\Core\Queue\QueueDatabaseFactory($this->get('database'));
    }

    /**
     * Gets the 'redirect_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RedirectResponseSubscriber A Drupal\Core\EventSubscriber\RedirectResponseSubscriber instance.
     * 
     * @throws InactiveScopeException when the 'redirect_response_subscriber' service is requested while the 'request' scope is not active
     */
    protected function getRedirectResponseSubscriberService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('redirect_response_subscriber', 'request');
        }

        return $this->services['redirect_response_subscriber'] = $this->scopedServices['request']['redirect_response_subscriber'] = new \Drupal\Core\EventSubscriber\RedirectResponseSubscriber($this->get('url_generator'));
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Request A Symfony\Component\HttpFoundation\Request instance.
     */
    protected function getRequestService()
    {
        return $this->services['request'] = call_user_func(array('Symfony\\Component\\HttpFoundation\\Request', 'createFromGlobals'));
    }

    /**
     * Gets the 'request_close_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RequestCloseSubscriber A Drupal\Core\EventSubscriber\RequestCloseSubscriber instance.
     */
    protected function getRequestCloseSubscriberService()
    {
        return $this->services['request_close_subscriber'] = new \Drupal\Core\EventSubscriber\RequestCloseSubscriber($this->get('module_handler'));
    }

    /**
     * Gets the 'reverse_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ReverseProxySubscriber A Drupal\Core\EventSubscriber\ReverseProxySubscriber instance.
     */
    protected function getReverseProxySubscriberService()
    {
        return $this->services['reverse_proxy_subscriber'] = new \Drupal\Core\EventSubscriber\ReverseProxySubscriber($this->get('settings'));
    }

    /**
     * Gets the 'route_enhancer.ajax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\AjaxEnhancer A Drupal\Core\Routing\Enhancer\AjaxEnhancer instance.
     */
    protected function getRouteEnhancer_AjaxService()
    {
        return $this->services['route_enhancer.ajax'] = new \Drupal\Core\Routing\Enhancer\AjaxEnhancer($this->get('content_negotiation'));
    }

    /**
     * Gets the 'route_enhancer.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\AuthenticationEnhancer A Drupal\Core\Routing\Enhancer\AuthenticationEnhancer instance.
     */
    protected function getRouteEnhancer_AuthenticationService()
    {
        return $this->services['route_enhancer.authentication'] = new \Drupal\Core\Routing\Enhancer\AuthenticationEnhancer($this->get('authentication'));
    }

    /**
     * Gets the 'route_enhancer.content_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\ContentControllerEnhancer A Drupal\Core\Routing\Enhancer\ContentControllerEnhancer instance.
     */
    protected function getRouteEnhancer_ContentControllerService()
    {
        return $this->services['route_enhancer.content_controller'] = new \Drupal\Core\Routing\Enhancer\ContentControllerEnhancer($this->get('content_negotiation'));
    }

    /**
     * Gets the 'route_enhancer.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Enhancer\EntityRouteEnhancer A Drupal\Core\Entity\Enhancer\EntityRouteEnhancer instance.
     */
    protected function getRouteEnhancer_EntityService()
    {
        return $this->services['route_enhancer.entity'] = new \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer($this->get('content_negotiation'));
    }

    /**
     * Gets the 'route_enhancer.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\FormEnhancer A Drupal\Core\Routing\Enhancer\FormEnhancer instance.
     */
    protected function getRouteEnhancer_FormService()
    {
        return $this->services['route_enhancer.form'] = new \Drupal\Core\Routing\Enhancer\FormEnhancer($this->get('content_negotiation'));
    }

    /**
     * Gets the 'route_special_attributes_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber A Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber instance.
     */
    protected function getRouteSpecialAttributesSubscriberService()
    {
        return $this->services['route_special_attributes_subscriber'] = new \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber();
    }

    /**
     * Gets the 'route_subscriber.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber A Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber instance.
     */
    protected function getRouteSubscriber_EntityService()
    {
        return $this->services['route_subscriber.entity'] = new \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber($this->get('entity.manager'));
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter();

        $instance->setContext($this->get('router.request_context'));
        $instance->add($this->get('router.dynamic'));
        $instance->add($this->get('legacy_router'));

        return $instance;
    }

    /**
     * Gets the 'router.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RouteBuilder A Drupal\Core\Routing\RouteBuilder instance.
     */
    protected function getRouter_BuilderService()
    {
        return $this->services['router.builder'] = new \Drupal\Core\Routing\RouteBuilder($this->get('router.dumper'), $this->get('lock'), $this->get('event_dispatcher'), $this->get('module_handler'));
    }

    /**
     * Gets the 'router.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\MatcherDumper A Drupal\Core\Routing\MatcherDumper instance.
     */
    protected function getRouter_DumperService()
    {
        return $this->services['router.dumper'] = new \Drupal\Core\Routing\MatcherDumper($this->get('database'));
    }

    /**
     * Gets the 'router.dynamic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\DynamicRouter A Symfony\Cmf\Component\Routing\DynamicRouter instance.
     */
    protected function getRouter_DynamicService()
    {
        $this->services['router.dynamic'] = $instance = new \Symfony\Cmf\Component\Routing\DynamicRouter($this->get('router.request_context'), $this->get('router.matcher'), $this->get('url_generator'));

        $instance->addRouteEnhancer($this->get('paramconverter_manager'), 0);
        $instance->addRouteEnhancer($this->get('route_enhancer.authentication'), 1000);
        $instance->addRouteEnhancer($this->get('route_enhancer.content_controller'), 30);
        $instance->addRouteEnhancer($this->get('route_enhancer.ajax'), 20);
        $instance->addRouteEnhancer($this->get('route_enhancer.entity'), 15);
        $instance->addRouteEnhancer($this->get('route_enhancer.form'), 10);

        return $instance;
    }

    /**
     * Gets the 'router.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getRouter_MatcherService()
    {
        $this->services['router.matcher'] = $instance = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('router.route_provider'));

        $instance->setFinalMatcher($this->get('router.matcher.final_matcher'));
        $instance->addRouteFilter($this->get('mime_type_matcher'));

        return $instance;
    }

    /**
     * Gets the 'router.matcher.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\UrlMatcher A Drupal\Core\Routing\UrlMatcher instance.
     */
    protected function getRouter_Matcher_FinalMatcherService()
    {
        return $this->services['router.matcher.final_matcher'] = new \Drupal\Core\Routing\UrlMatcher();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        $this->services['router.request_context'] = $instance = new \Symfony\Component\Routing\RequestContext();

        $instance->fromRequest($this->get('request'));

        return $instance;
    }

    /**
     * Gets the 'router.route_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RouteProvider A Drupal\Core\Routing\RouteProvider instance.
     */
    protected function getRouter_RouteProviderService()
    {
        return $this->services['router.route_provider'] = new \Drupal\Core\Routing\RouteProvider($this->get('database'));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'));
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Utility\Settings A Drupal\Component\Utility\Settings instance.
     */
    protected function getSettingsService()
    {
        return $this->services['settings'] = call_user_func(array('Drupal\\Component\\Utility\\Settings', 'getSingleton'));
    }

    /**
     * Gets the 'slave_database_ignore__subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\SlaveDatabaseIgnoreSubscriber A Drupal\Core\EventSubscriber\SlaveDatabaseIgnoreSubscriber instance.
     */
    protected function getSlaveDatabaseIgnoreSubscriberService()
    {
        return $this->services['slave_database_ignore__subscriber'] = new \Drupal\Core\EventSubscriber\SlaveDatabaseIgnoreSubscriber();
    }

    /**
     * Gets the 'state' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueStoreInterface A Drupal\Core\KeyValueStore\KeyValueStoreInterface instance.
     */
    protected function getStateService()
    {
        return $this->services['state'] = $this->get('keyvalue')->get('state');
    }

    /**
     * Gets the 'string_translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\StringTranslation\TranslationManager A Drupal\Core\StringTranslation\TranslationManager instance.
     */
    protected function getStringTranslationService()
    {
        $this->services['string_translation'] = $instance = new \Drupal\Core\StringTranslation\TranslationManager();

        $instance->addTranslator($this->get('string_translator.custom_strings'), 30);

        return $instance;
    }

    /**
     * Gets the 'string_translator.custom_strings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\StringTranslation\Translator\CustomStrings A Drupal\Core\StringTranslation\Translator\CustomStrings instance.
     */
    protected function getStringTranslator_CustomStringsService()
    {
        return $this->services['string_translator.custom_strings'] = new \Drupal\Core\StringTranslation\Translator\CustomStrings();
    }

    /**
     * Gets the 'system.breadcrumb.legacy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\LegacyBreadcrumbBuilder A Drupal\system\LegacyBreadcrumbBuilder instance.
     */
    protected function getSystem_Breadcrumb_LegacyService()
    {
        return $this->services['system.breadcrumb.legacy'] = new \Drupal\system\LegacyBreadcrumbBuilder();
    }

    /**
     * Gets the 'system.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\SystemManager A Drupal\system\SystemManager instance.
     */
    protected function getSystem_ManagerService()
    {
        return $this->services['system.manager'] = new \Drupal\system\SystemManager($this->get('module_handler'), $this->get('database'));
    }

    /**
     * Gets the 'system.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\system\Routing\RouteSubscriber A Drupal\system\Routing\RouteSubscriber instance.
     */
    protected function getSystem_RouteSubscriberService()
    {
        return $this->services['system.route_subscriber'] = new \Drupal\system\Routing\RouteSubscriber();
    }

    /**
     * Gets the 'token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Utility\Token A Drupal\Core\Utility\Token instance.
     */
    protected function getTokenService()
    {
        return $this->services['token'] = new \Drupal\Core\Utility\Token($this->get('module_handler'));
    }

    /**
     * Gets the 'transliteration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Transliteration\PHPTransliteration A Drupal\Core\Transliteration\PHPTransliteration instance.
     */
    protected function getTransliterationService()
    {
        return $this->services['transliteration'] = new \Drupal\Core\Transliteration\PHPTransliteration();
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Template\TwigEnvironment A Drupal\Core\Template\TwigEnvironment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Drupal\Core\Template\TwigEnvironment($this->get('twig.loader.filesystem'), array('cache' => true, 'base_template_class' => 'Drupal\\Core\\Template\\TwigTemplate', 'autoescape' => false, 'strict_variables' => false, 'debug' => false, 'auto_reload' => NULL));

        $instance->addExtension(new \Drupal\Core\Template\TwigExtension());
        $instance->addExtension(new \Twig_Extension_Debug());

        return $instance;
    }

    /**
     * Gets the 'twig.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Loader_Filesystem A Twig_Loader_Filesystem instance.
     */
    protected function getTwig_Loader_FilesystemService()
    {
        return $this->services['twig.loader.filesystem'] = new \Twig_Loader_Filesystem('/media/sda4/shared/workspace/albatrossdigital');
    }

    /**
     * Gets the 'typed_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\TypedData\TypedDataManager A Drupal\Core\TypedData\TypedDataManager instance.
     */
    protected function getTypedDataService()
    {
        $this->services['typed_data'] = $instance = new \Drupal\Core\TypedData\TypedDataManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));

        $instance->setValidationConstraintManager($this->get('validation.constraint'));

        return $instance;
    }

    /**
     * Gets the 'url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\UrlGenerator A Drupal\Core\Routing\UrlGenerator instance.
     */
    protected function getUrlGeneratorService()
    {
        $this->services['url_generator'] = $instance = new \Drupal\Core\Routing\UrlGenerator($this->get('router.route_provider'), $this->get('path_processor_manager'), $this->get('config.factory'), $this->get('settings'));

        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('router.request_context')) {
            $instance->setContext($this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'user.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\UserAutocomplete A Drupal\user\UserAutocomplete instance.
     */
    protected function getUser_AutocompleteService()
    {
        return $this->services['user.autocomplete'] = new \Drupal\user\UserAutocomplete($this->get('database'), $this->get('config.factory'));
    }

    /**
     * Gets the 'user.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\UserData A Drupal\user\UserData instance.
     */
    protected function getUser_DataService()
    {
        return $this->services['user.data'] = new \Drupal\user\UserData($this->get('database'));
    }

    /**
     * Gets the 'user.tempstore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\TempStoreFactory A Drupal\user\TempStoreFactory instance.
     */
    protected function getUser_TempstoreService()
    {
        return $this->services['user.tempstore'] = new \Drupal\user\TempStoreFactory($this->get('database'), $this->get('lock'));
    }

    /**
     * Gets the 'user_maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\user\EventSubscriber\MaintenanceModeSubscriber A Drupal\user\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getUserMaintenanceModeSubscriberService()
    {
        return $this->services['user_maintenance_mode_subscriber'] = new \Drupal\user\EventSubscriber\MaintenanceModeSubscriber();
    }

    /**
     * Gets the 'validation.constraint' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Validation\ConstraintManager A Drupal\Core\Validation\ConstraintManager instance.
     */
    protected function getValidation_ConstraintService()
    {
        return $this->services['validation.constraint'] = new \Drupal\Core\Validation\ConstraintManager($this->get('container.namespaces'), $this->get('cache.cache'), $this->get('language_manager'), $this->get('module_handler'));
    }

    /**
     * Gets the 'view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ViewSubscriber A Drupal\Core\EventSubscriber\ViewSubscriber instance.
     */
    protected function getViewSubscriberService()
    {
        return $this->services['view_subscriber'] = new \Drupal\Core\EventSubscriber\ViewSubscriber($this->get('content_negotiation'));
    }

    /**
     * Gets the 'views.analyzer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\Analyzer A Drupal\views\Analyzer instance.
     */
    protected function getViews_AnalyzerService()
    {
        return $this->services['views.analyzer'] = new \Drupal\views\Analyzer($this->get('module_handler'));
    }

    /**
     * Gets the 'views.executable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewExecutableFactory A Drupal\views\ViewExecutableFactory instance.
     */
    protected function getViews_ExecutableService()
    {
        return $this->services['views.executable'] = new \Drupal\views\ViewExecutableFactory();
    }

    /**
     * Gets the 'views.route_access_check' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewsAccessCheck A Drupal\views\ViewsAccessCheck instance.
     */
    protected function getViews_RouteAccessCheckService()
    {
        return $this->services['views.route_access_check'] = new \Drupal\views\ViewsAccessCheck();
    }

    /**
     * Gets the 'views.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\EventSubscriber\RouteSubscriber A Drupal\views\EventSubscriber\RouteSubscriber instance.
     */
    protected function getViews_RouteSubscriberService()
    {
        return $this->services['views.route_subscriber'] = new \Drupal\views\EventSubscriber\RouteSubscriber($this->get('config.factory'));
    }

    /**
     * Gets the 'views.views_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewsData A Drupal\views\ViewsData instance.
     */
    protected function getViews_ViewsDataService()
    {
        return $this->services['views.views_data'] = new \Drupal\views\ViewsData($this->get('cache.views_info'), $this->get('config.factory'), $this->get('module_handler'), $this->get('language_manager'));
    }

    /**
     * Gets the 'views.views_data_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\views\ViewsDataHelper A Drupal\views\ViewsDataHelper instance.
     */
    protected function getViews_ViewsDataHelperService()
    {
        return $this->services['views.views_data_helper'] = new \Drupal\views\ViewsDataHelper($this->get('views.views_data'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'container.service_providers' => array(
                0 => 'Drupal\\Core\\CoreServiceProvider',
            ),
            'container.modules' => array(
                'block' => 'core/modules/block/block.module',
                'breakpoint' => 'core/modules/breakpoint/breakpoint.module',
                'ckeditor' => 'core/modules/ckeditor/ckeditor.module',
                'color' => 'core/modules/color/color.module',
                'comment' => 'core/modules/comment/comment.module',
                'config' => 'core/modules/config/config.module',
                'contact' => 'core/modules/contact/contact.module',
                'contextual' => 'core/modules/contextual/contextual.module',
                'custom_block' => 'core/modules/block/custom_block/custom_block.module',
                'datetime' => 'core/modules/datetime/datetime.module',
                'dblog' => 'core/modules/dblog/dblog.module',
                'edit' => 'core/modules/edit/edit.module',
                'editor' => 'core/modules/editor/editor.module',
                'entity' => 'core/modules/entity/entity.module',
                'field' => 'core/modules/field/field.module',
                'field_ui' => 'core/modules/field_ui/field_ui.module',
                'file' => 'core/modules/file/file.module',
                'filter' => 'core/modules/filter/filter.module',
                'help' => 'core/modules/help/help.module',
                'history' => 'core/modules/history/history.module',
                'image' => 'core/modules/image/image.module',
                'menu' => 'core/modules/menu/menu.module',
                'menu_link' => 'core/modules/menu_link/menu_link.module',
                'node' => 'core/modules/node/node.module',
                'number' => 'core/modules/number/number.module',
                'options' => 'core/modules/options/options.module',
                'overlay' => 'core/modules/overlay/overlay.module',
                'path' => 'core/modules/path/path.module',
                'rdf' => 'core/modules/rdf/rdf.module',
                'responsive_preview' => 'core/modules/responsive_preview/responsive_preview.module',
                'search' => 'core/modules/search/search.module',
                'shortcut' => 'core/modules/shortcut/shortcut.module',
                'system' => 'core/modules/system/system.module',
                'taxonomy' => 'core/modules/taxonomy/taxonomy.module',
                'text' => 'core/modules/text/text.module',
                'toolbar' => 'core/modules/toolbar/toolbar.module',
                'update' => 'core/modules/update/update.module',
                'user' => 'core/modules/user/user.module',
                'views_ui' => 'core/modules/views_ui/views_ui.module',
                'views' => 'core/modules/views/views.module',
                'spark' => 'profiles/spark/spark.profile',
            ),
            'container.namespaces' => array(
                'Drupal\\block' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/block/lib',
                'Drupal\\breakpoint' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/breakpoint/lib',
                'Drupal\\ckeditor' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/ckeditor/lib',
                'Drupal\\color' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/color/lib',
                'Drupal\\comment' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/comment/lib',
                'Drupal\\config' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/config/lib',
                'Drupal\\contact' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/contact/lib',
                'Drupal\\contextual' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/contextual/lib',
                'Drupal\\custom_block' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/block/custom_block/lib',
                'Drupal\\datetime' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/datetime/lib',
                'Drupal\\dblog' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/dblog/lib',
                'Drupal\\edit' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/edit/lib',
                'Drupal\\editor' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/editor/lib',
                'Drupal\\entity' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/entity/lib',
                'Drupal\\field' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/field/lib',
                'Drupal\\field_ui' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/field_ui/lib',
                'Drupal\\file' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/file/lib',
                'Drupal\\filter' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/filter/lib',
                'Drupal\\help' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/help/lib',
                'Drupal\\history' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/history/lib',
                'Drupal\\image' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/image/lib',
                'Drupal\\menu' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/menu/lib',
                'Drupal\\menu_link' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/menu_link/lib',
                'Drupal\\node' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/node/lib',
                'Drupal\\number' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/number/lib',
                'Drupal\\options' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/options/lib',
                'Drupal\\overlay' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/overlay/lib',
                'Drupal\\path' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/path/lib',
                'Drupal\\rdf' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/rdf/lib',
                'Drupal\\responsive_preview' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/responsive_preview/lib',
                'Drupal\\search' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/search/lib',
                'Drupal\\shortcut' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/shortcut/lib',
                'Drupal\\system' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/system/lib',
                'Drupal\\taxonomy' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/taxonomy/lib',
                'Drupal\\text' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/text/lib',
                'Drupal\\toolbar' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/toolbar/lib',
                'Drupal\\update' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/update/lib',
                'Drupal\\user' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/user/lib',
                'Drupal\\views_ui' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/views_ui/lib',
                'Drupal\\views' => '/media/sda4/shared/workspace/albatrossdigital/core/modules/views/lib',
                'Drupal\\spark' => '/media/sda4/shared/workspace/albatrossdigital/profiles/spark/lib',
                'Drupal\\Core\\Menu' => '/media/sda4/shared/workspace/albatrossdigital/core/lib',
                'Drupal\\Core\\Entity' => '/media/sda4/shared/workspace/albatrossdigital/core/lib',
                'Drupal\\Core\\TypedData' => '/media/sda4/shared/workspace/albatrossdigital/core/lib',
                'Drupal\\Core\\Http' => '/media/sda4/shared/workspace/albatrossdigital/core/lib',
                'Drupal\\Core\\Validation' => '/media/sda4/shared/workspace/albatrossdigital/core/lib',
            ),
            'persistids' => array(
                0 => 'class_loader',
                1 => 'kernel',
                2 => 'service_container',
                3 => 'config.storage',
                4 => 'config.context',
                5 => 'config.factory',
                6 => 'container.namespaces',
                7 => 'url_generator',
            ),
            'cache_bins' => array(
                'cache.bootstrap' => 'bootstrap',
                'cache.config' => 'config',
                'cache.cache' => 'cache',
                'cache.entity' => 'entity',
                'cache.menu' => 'menu',
                'cache.page' => 'page',
                'cache.path' => 'path',
                'cache.block' => 'block',
                'cache.ckeditor.languages' => 'ckeditor.languages',
                'cache.field' => 'field',
                'cache.filter' => 'filter',
                'cache.toolbar' => 'toolbar',
                'cache.views_info' => 'views_info',
                'cache.views_results' => 'views_results',
            ),
        );
    }
}
