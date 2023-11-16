<?php
$currentTab = "phones";
require_once('incs/header.inc.php');
require_once('incs/functions.inc.php');

function exception_error_handler($severity, $message, $file, $line)
{
  throw new ErrorException($message, 0, $severity, $file, $line);
}

set_error_handler("exception_error_handler");

try {

  $conn = connect();
  $sql = "SELECT id, phone_model_year as year, phone_name as name, phone_image_path as image, phone_description, phone_condition
        FROM phone_details";

  $phones = $conn->query($sql);
  ?>
  <div class="container ">
    <h1 class="my-4">The devices</h1>
    <div class="row">
      <div class="container col-12 col-md-9 d-grid gx-2">
        <div class="row phones-container ">
          <?php
          while ($phone = $phones->fetch_assoc()) {
            ?>
            <div class="col-6 col-md-4 col-xl-3 mb-3 phone active">
              <a href="phone.php?phone=<?php echo $phone["id"]; ?>">
                <div class="card">
                  <img src="<?php echo PHONE_IMGS_PATH . $phone["image"] ?>" class="card-img-top"
                    alt="<?php echo $phone["name"]; ?>" />
                  <?php

                  echo '<span class="badge-new badge bg-danger text-capitalize ">' . $phone["phone_condition"] . '</span>';
                  ?>
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php echo $phone["name"]; ?>
                    </h5>
                    <p class="card-text">
                      <?php echo $phone["year"]; ?>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <?php
          } ?>

        </div>
      </div>
      <div class="col-3">
        <div class="container">
          <div class="row">
            <div class="col-12 pb-5">
              <div class="col-12 pb-5">
                <div class="card">
                  <div class="card-header" data-bs-toggle="collapse" data-bs-target="#useful-link">
                    Useful Links
                  </div>
                  <div class="card-body p-0 m-0">
                    <ul type="circle" class="py-2 py-3 collapse show" id="useful-link">
                      <li><a href="https://www.google.com" target="_new">Google</a></li>
                      <li><a href="https://www.facebook.com" target="_new">Facebook</a></li>
                      <li><a href="https://www.microsoft.com" target="_new">Microsoft</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 pb-5">
                <div class="card">
                  <div class="card-header" data-bs-toggle="collapse" data-bs-target="#rules">Rules & Regulations</div>
                  <div class="card-body  p-0 m-0">
                    <dl id="rules" class="py-2 py-3  collapse show">
                      <dd>
                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#privacyModal">
                          Privacy Policy
                        </button>
                      </dd>
                      <dd>
                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#termsModal">
                          Term of use
                        </button>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="privacyModalLabel">
            Privacy Policy
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          We and our partners store and/or access information on a device,
          such as cookies and process personal data, such as unique
          identifiers and standard information sent by a device for
          personalized ads and content, ad and content measurement, and
          audience insights, as well as to develop and improve products. With
          your permission we and our partners may use precise geolocation data
          and identification through device scanning. You may click to consent
          to our and our partners’ processing as described above.
          Alternatively you may click to refuse to consent or access more
          detailed information and change your preferences before consenting.
          Please note that some processing of your personal data may not
          require your consent, but you have a right to object to such
          processing. Your preferences will apply to this website only. You
          can change your preferences at any time by returning to this site or
          visit our privacy policy.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="termsModalLabel">
            Generic Terms of Use
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Please read these terms of use ("terms of use", "agreement")
          carefully before using [website] website (“website”, "service")
          operated by [name] ("us", 'we", "our").
          <h4>Conditions of use</h4>
          By using this website, you certify that you have read and reviewed
          this Agreement and that you agree to comply with its terms. If you
          do not want to be bound by the terms of this Agreement, you are
          advised to leave the website accordingly. [name] only grants use and
          access of this website, its products, and its services to those who
          have accepted its terms.
          <h4>Privacy policy</h4>
          Before you continue using our website, we advise you to read our
          privacy policy [link to privacy policy] regarding our user data
          collection. It will help you better understand our practices.
          <h4>Age restriction</h4>
          You must be at least 18 (eighteen) years of age before you can use
          this website. By using this website, you warrant that you are at
          least 18 years of age and you may legally adhere to this Agreement.
          [name] assumes no responsibility for liabilities related to age
          misrepresentation.
          <h4>Intellectual property</h4>
          You agree that all materials, products, and services provided on
          this website are the property of [name], its affiliates, directors,
          officers, employees, agents, suppliers, or licensors including all
          copyrights, trade secrets, trademarks, patents, and other
          intellectual property. You also agree that you will not reproduce or
          redistribute the [name]’s intellectual property in any way,
          including electronic, digital, or new trademark registrations. You
          grant [name] a royalty-free and non-exclusive license to display,
          use, copy, transmit, and broadcast the content you upload and
          publish. For issues regarding intellectual property claims, you
          should contact the company in order to come to an agreement.
          <h4>User accounts</h4>
          As a user of this website, you may be asked to register with us and
          provide private information. You are responsible for ensuring the
          accuracy of this information, and you are responsible for
          maintaining the safety and security of your identifying information.
          You are also responsible for all activities that occur under your
          account or password. If you think there are any possible issues
          regarding the security of your account on the website, inform us
          immediately so we may address it accordingly. We reserve all rights
          to terminate accounts, edit or remove content and cancel orders in
          their sole discretion.
          <h4>Applicable law</h4>
          By visiting this website, you agree that the laws of the [location],
          without regard to principles of conflict laws, will govern these
          terms and conditions, or any dispute of any sort that might come
          between [name] and you, or its business partners and associates.
          <h4>Disputes</h4>
          Any dispute related in any way to your visit to this website or to
          products you purchase from us shall be arbitrated by state or
          federal court [location] and you consent to exclusive jurisdiction
          and venue of such courts.
          <h4>Indemnification</h4>
          You agree to indemnify [name] and its affiliates and hold [name]
          harmless against legal claims and demands that may arise from your
          use or misuse of our services. We reserve the right to select our
          own legal counsel.
          <h4>Limitation on liability</h4>
          this website is not liable for any damages that may occur to you as
          a result of your misuse of our website.
          <p>
            This website reserves the right to edit, modify, and change this
            Agreement any time. We shall let our users know of these changes
            through electronic mail. This Agreement is an understanding
            between [name] and the user, and this supersedes and replaces all
            prior agreements regarding the use of this website.
          </p>
          <div class="alert alert-warning">
            Save your time and take the guesswork out of the legal jargon with
            our smart generators trusted by thousands. Create bulletproof
            terms of use personalized to your needs in minutes.
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once('incs/footer.inc.php');
} catch (Exception $th) {
  logError($th);
}
?>