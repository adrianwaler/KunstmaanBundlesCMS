<?php

namespace Kunstmaan\AdminBundle\Helper;

interface DomainConfigurationInterface
{
    /**
     * Return the current host (or the current host override if using the MultiDomainBundle)
     *
     * @return string
     */
    public function getHost();

    /**
     * Return all known hosts.
     *
     * @return array
     */
    public function getHosts();

    /**
     * Get the default locale for the current host.
     *
     * @return string
     */
    public function getDefaultLocale();

    /**
     * Return if the current host or the host provided is multi language.
     *
     * @param string|null $host
     *
     * @return bool
     */
    public function isMultiLanguage($host = null);

    /**
     * Return the frontend locales for the current host or the host provided.
     *
     * @param string|null $host
     *
     * @return array
     */
    public function getFrontendLocales($host = null);

    /**
     * Return the backend locales for the current host or the host provided.
     *
     * @param string|null $host
     *
     * @return array
     */
    public function getBackendLocales($host = null);

    /**
     * Return the root node for the current host (should always be null when the
     * root node does not exist OR you don't use the MultiDomainBundle).
     *
     * @param string|null $host
     *
     * @return \Kunstmaan\NodeBundle\Entity\Node|null
     */
    public function getRootNode($host = null);

    /**
     * Return true if we found multi domain configuration for the current host.
     *
     * @return bool
     */
    public function isMultiDomainHost();

    /**
     * Return optional extra data for the current host from the multi domain
     * configuration. Returns an empty array if no data was defined...
     *
     * @return mixed
     */
    public function getExtraData();

    /**
     * Return optional extra locales data for the current host from the multi domain
     * configuration. Returns an empty array if no data was defined...
     *
     * @return mixed
     */
    public function getLocalesExtraData();

    /**
     * Return the full host config
     *
     * @return array
     */
    public function getFullHostConfig();

    /**
     * Return the full host
     *
     * @param string|null $host
     *
     * @return mixed
     */
    public function getFullHost($host = null);

    /**
     * Return the full host of a given id.
     *
     * @param int $id
     *
     * @return mixed
     */
    public function getFullHostById($id);

    /**
     * Return the host switched to from url chooser
     *
     * @return mixed
     */
    public function getHostSwitched();

    /**
     * Return the host name with the protocol
     *
     * @param string|null $host
     *
     * @return mixed
     */
    public function getHostBaseUrl($host = null);

}
