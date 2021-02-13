const { __ } = wp.i18n;
import { registerBlockType } from '@wordpress/blocks';

// Import SVG as React component using @svgr/webpack.
// https://www.npmjs.com/package/@svgr/webpack
import { ReactComponent as Logo } from "../bv-logo.svg";

// Import file as base64 encoded URI using url-loader.
// https://www.npmjs.com/package/url-loader
import {ReactComponent as logoWhiteURL} from "../bv-logo-white.svg";

// https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-registration/
registerBlockType("gbb/static", {
  title: __("Like & Subscribe", "gbb"),
  icon: { src: Logo },
  category: "gbb",

  // https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-edit-save/
  edit() {
    return (
      <div className="gbb-block gbb-static">
        <figure className="gbb-logo">
          <img src={logoWhiteURL} alt="logo" />
        </figure>
        <div className="gbb-info">
          <h3 className="gbb-title">
            {__("The Binaryville Podcast", "gbb")}
          </h3>
          <div className="gbb-cta">
            <a href="#">{__("Like & Subscribe!", "gbb")}</a>
          </div>
        </div>
      </div>
    );
  },
  save() {
    return (
      <div className="gbb-block gbb-static">
        <figure className="gbb-logo">
          <img src={logoWhiteURL} alt="logo" />
        </figure>
        <div className="gbb-info">
          <h3 className="gbb-title">
            {__("The Binaryville Podcast", "gbb")}
          </h3>
          <div className="gbb-cta">
            <a href="/subscribe">{__("Like & Subscribe!", "gbb")}</a>
          </div>
        </div>
      </div>
    );
  }
});
