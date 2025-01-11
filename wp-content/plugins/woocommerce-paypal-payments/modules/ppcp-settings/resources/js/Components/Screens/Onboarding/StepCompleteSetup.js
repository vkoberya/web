import { __ } from '@wordpress/i18n';
import { Button, Icon } from '@wordpress/components';

import OnboardingHeader from '../../ReusableComponents/OnboardingHeader';

const StepCompleteSetup = ( { setCompleted } ) => {
	const ButtonIcon = () => (
		<Icon
			icon={ () => (
				<svg
					width="25"
					height="24"
					viewBox="0 0 25 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
                    <path
                        d="M12.4999 12.75V18.75C12.4999 18.9489 12.4209 19.1397 12.2803 19.2803C12.1396 19.421 11.9488 19.5 11.7499 19.5C11.551 19.5 11.3603 19.421 11.2196 19.2803C11.0789 19.1397 10.9999 18.9489 10.9999 18.75V14.5613L4.78055 20.7806C4.71087 20.8503 4.62815 20.9056 4.5371 20.9433C4.44606 20.981 4.34847 21.0004 4.24993 21.0004C4.15138 21.0004 4.0538 20.981 3.96276 20.9433C3.87171 20.9056 3.78899 20.8503 3.7193 20.7806C3.64962 20.7109 3.59435 20.6282 3.55663 20.5372C3.51892 20.4461 3.49951 20.3485 3.49951 20.25C3.49951 20.1515 3.51892 20.0539 3.55663 19.9628C3.59435 19.8718 3.64962 19.7891 3.7193 19.7194L9.93868 13.5H5.74993C5.55102 13.5 5.36025 13.421 5.2196 13.2803C5.07895 13.1397 4.99993 12.9489 4.99993 12.75C4.99993 12.5511 5.07895 12.3603 5.2196 12.2197C5.36025 12.079 5.55102 12 5.74993 12H11.7499C11.9488 12 12.1396 12.079 12.2803 12.2197C12.4209 12.3603 12.4999 12.5511 12.4999 12.75ZM19.9999 3H7.99993C7.6021 3 7.22057 3.15804 6.93927 3.43934C6.65796 3.72064 6.49993 4.10218 6.49993 4.5V9C6.49993 9.19891 6.57895 9.38968 6.7196 9.53033C6.86025 9.67098 7.05102 9.75 7.24993 9.75C7.44884 9.75 7.63961 9.67098 7.78026 9.53033C7.92091 9.38968 7.99993 9.19891 7.99993 9V4.5H19.9999V16.5H15.4999C15.301 16.5 15.1103 16.579 14.9696 16.7197C14.8289 16.8603 14.7499 17.0511 14.7499 17.25C14.7499 17.4489 14.8289 17.6397 14.9696 17.7803C15.1103 17.921 15.301 18 15.4999 18H19.9999C20.3978 18 20.7793 17.842 21.0606 17.5607C21.3419 17.2794 21.4999 16.8978 21.4999 16.5V4.5C21.4999 4.10218 21.3419 3.72064 21.0606 3.43934C20.7793 3.15804 20.3978 3 19.9999 3Z"
                        fill="white"
                    />
				</svg>
			) }
		/>
	);

	return (
		<div className="ppcp-r-page-products">
			<OnboardingHeader
				title={ __(
					'Complete Your Payment Setup',
					'woocommerce-paypal-payments'
				) }
				description={ __(
					'To finalize your payment setup, please log in to PayPal. If you don’t have an account yet, don’t worry - we’ll guide you through the easy process of creating one.',
					'woocommerce-paypal-payments'
				) }
			/>
			<div className="ppcp-r-inner-container">
				<div className="ppcp-r-onboarding-header__description">
					<Button
						variant="primary"
						icon={ ButtonIcon }
						onClick={ () => {
							setCompleted( true );
						} }
					>
						{ __(
							'Connect to PayPal',
							'woocommerce-paypal-payments'
						) }
					</Button>
				</div>
			</div>
		</div>
	);
};

export default StepCompleteSetup;
