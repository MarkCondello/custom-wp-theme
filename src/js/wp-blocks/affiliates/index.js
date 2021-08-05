const { registerBlockType } = wp.blocks;
const { InspectorControls } = wp.editor;
const { __ } = wp.i18n; // Import __() from wp.i18n
const { withSelect } = wp.data;
const { SelectControl } = wp.components;

registerBlockType ('markcond/affiliates', {
    title: 'Event Affiliates',
    icon: 'groups',
    category: 'layout',
    attributes: {
        affiliateImage: {
            type: 'string',
			source: 'attribute',
			selector: '.affiliate img',
			attribute: 'src', 
         },
         affiliateExcerpt: {
             type: 'string',
             default: 'No Excerpt',
         },
         affiliateTitle: {
            type: 'string',
            default: 'No Title',
        },
        affiliateWebsiteUrl: {
            type: 'string',
            default: '#',
        },
    },
    edit: withSelect((select, props) => {
        const query = {
            per_page : -1,
            status: 'publish',
        }
        return {
            affiliatePosts : wp.data.select('core').getEntityRecords('postType', 'affiliate', query)
        }
    })

    (props => {
        const {
            attributes: {
                affiliateTitle,
                affiliateImage,
                affiliateExcerpt,
                affiliateWebsiteUrl,
            },
            setAttributes,
            affiliatePosts
        } = props;

        let onSelectChange = (value) => {
           let matchedPost = affiliatePosts.filter(post => post.id === parseInt(value));
            setAttributes({affiliateTitle: matchedPost[0].title.rendered});
            setAttributes({affiliateImage: matchedPost[0].featured_image});
            setAttributes({affiliateExcerpt: matchedPost[0].excerpt.rendered.replace(/(<([^>]+)>)/gi, "")});
            setAttributes({affiliateWebsiteUrl: matchedPost[0].website_url});

        }

        let options =[];

        if(affiliatePosts){
            // console.log({affiliatePosts})
            options.push( { value: null, label: "Select an affiliate"});
             affiliatePosts.forEach(post=>{
                options.push( { value: post.id, label: post.title.rendered } );
            });
        } else {
            options.push( { value: null, label: "There are not affiliate options"});
        }

        return ([
            <InspectorControls> 
                <SelectControl
                    label="Select an affiliate"
                    options={options}
                    onChange={onSelectChange}
                    value={affiliateTitle}
                >
                </SelectControl>
            </InspectorControls>,
            <div class="affiliate">
                <h4>
                    <a href={affiliateWebsiteUrl} target="_blank">{affiliateTitle}</a>
                </h4>
                <a href={affiliateWebsiteUrl} target="_blank">
                    <img src={affiliateImage} />  
                </a>                
                <p>{affiliateExcerpt}</p>
            </div>
        ])
    }),

    save: (props) => {
		const {
			attributes: { 
                affiliateTitle,
                affiliateImage,
                affiliateExcerpt,
                affiliateWebsiteUrl,
		   }, 
 	   } = props;

    return (<div class="affiliate">
                <h4>
                    <a href={affiliateWebsiteUrl} target="_blank">{affiliateTitle}</a>
                </h4>                
                <a href={affiliateWebsiteUrl} target="_blank">
                    <img src={affiliateImage} />  
                </a>
                <p>{affiliateExcerpt}</p>
            </div> )
    }, 
});