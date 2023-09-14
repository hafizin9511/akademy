/**
 * External dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import { isExperimentalBuild } from '@woocommerce/block-settings';

/**
 * Internal dependencies
 */
import icon from './icon';
import { Edit, Save } from './edit';
import metadata from './block.json';
import './style.scss';

if ( isExperimentalBuild() ) {
	// @ts-expect-error: `metadata` currently does not have a type definition in WordPress core
	registerBlockType( metadata, {
		icon,
		edit: Edit,
		save: Save,
	} );
}
