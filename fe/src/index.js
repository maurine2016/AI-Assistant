"use strict";

import { addFilter } from '@wordpress/hooks';
import './style.scss';
import aiKitTextControls from "./components/aiKitTextControls";

addFilter(
	'editor.BlockEdit',
	'aikit/tex-controls',
	aiKitTextControls,
);
